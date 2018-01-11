function getTimeToSaveId() {
    var d = new Date();
    return d.getTime();
}

function setItemInLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

function getItemInLocalStorage(key)
{
    return localStorage.getItem(key);
}


function trimDoubleQuota(str) {
    var total = str.length;
    return str.substring(1, total-1);
}

function getIdNodeTodo(item) {
    var currentNode = item.parentNode;
    var idTodo = currentNode.childNodes[1].id;

    return idTodo;
}

function reRenderTodoByActions(arrTodo) {
    var nodeMain = document.getElementsByClassName('main'); // NodeList : object HTMLCollectio

    while (nodeMain[0].firstChild) {
        nodeMain[0].removeChild(nodeMain[0].firstChild);
    }

    var length = arrTodo.length;

    // ========== append todos to html from local storage =========== //
    for (var i=0; i < length; i++)
    {
        var str = makeHtmlTodo(arrTodo[i]);
        addTodoToTodos(str);
    }
}

function addTodoToTodos(str) {
    var nodeTmp = document.createElement('div');
    nodeTmp.setAttribute('class', 'view');
    nodeTmp.innerHTML = str ;

    var node = document.getElementsByClassName('main'); // NodeList : object HTMLCollection

    // add a to_do to main to_do
    node[0].appendChild(nodeTmp);
}


function displayFooter() {
    var nodeFooter = document.getElementsByClassName('footer');
    nodeFooter[0].style.display = 'inline-flex';
}

function hideFooter() {
    var nodeFooter = document.getElementsByClassName('footer');
    nodeFooter[0].style.display = 'none';
}

function displayCountTodo() {
    var countTodos = getItemInLocalStorage('count') || 0;
    document.getElementById('count_todo').innerHTML = countTodos;
}

function displayLinkClearTodo() {
    var nodeClear = document.getElementsByClassName('clear');
    nodeClear[0].style.display = 'block';
}

function hideLinkClearTodo() {
    var nodeClear = document.getElementsByClassName('clear');
    nodeClear[0].style.display = 'none';
}


function reCountTodo(needle) {
    var countTodo = getItemInLocalStorage('count') || 0;

    if (needle == 'des')
    {
        countTodo--;
    }
    else if (needle == 'asc')
    {
        countTodo++;
    }

    setItemInLocalStorage('count', countTodo);
    displayCountTodo();

    return countTodo;
}

function makeHtmlTodo(todo) {
    var isCompleted = todo.completed == true ? 'isComplete' : 'xxx';

    var isChecked = todo.completed == true ? 'checked' : 'xxx';

    var str =
        '<input class="checkbox" '+isChecked+' type="checkbox" onclick = "isCompletedTodo(this)">' +
        '<label class='+isCompleted+' id='+todo.id+'>'+todo.title+'</label>' +
        '<a class="destroy"  onclick="destroyATodo(this)">' +
        '<i class="fa fa-trash-o" aria-hidden="true"></i>' +
        '</a>';

    return str;
}


function removeHtmlTodo(todo) {
    var currentNode = todo.parentNode;
    var mainNode = currentNode.parentNode;
    mainNode.removeChild(currentNode);
}



function toggleCompletedTodo(id) {
    var localTodos = JSON.parse(getItemInLocalStorage('todos'));

    var lengthLocalTodos = localTodos.length;

    if (lengthLocalTodos > 0)
    {
        for (var i=0; i < lengthLocalTodos; i++) {
            if (id == localTodos[i].id.toString())
            {
                var tmp = localTodos[i].completed;
                localTodos[i].completed = !tmp;
            }
        }
    }

    setItemInLocalStorage('todos', JSON.stringify(localTodos));
}


function getCompletedTodo(needle) {
    var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];

    var lengthLocalTodos = localTodos.length;
    var arrCompleteTodo = [];

    var arrActiveTodo = [];

    if (needle == 'completed')
    {
        for (var i=0; i<lengthLocalTodos; i++)
        {
            if (localTodos[i].completed == true)
            {
                arrCompleteTodo.push(localTodos[i]);
            }
        }
        return arrCompleteTodo;
    }
    else if (needle == 'active')
    {
        for (var i=0; i<lengthLocalTodos; i++)
        {
            if (localTodos[i].completed == false)
            {
                arrActiveTodo.push(localTodos[i]);
            }
        }
        return arrActiveTodo;
    }

    return localTodos;
}


function countItemCompletedFromLocalStorage() {
    var arrCompleteTodo = getCompletedTodo('completed');

    if(arrCompleteTodo.length > 0)
    {
        displayLinkClearTodo();
    }
    else
    {
        hideLinkClearTodo();
    }
}


function fetchListTodos()
{
    var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];

    var lengthLocalTodos = localTodos.length;

    if (lengthLocalTodos > 0)
    {
        for (var i=0; i<lengthLocalTodos; i++)
        {
            var str = makeHtmlTodo(localTodos[i]);

            addTodoToTodos(str);
        }

        displayFooter();

        displayCountTodo();
    }
}


function getTabTodos()
{
    var url = window.location.href;

    var arrSplitUrl = url.split('/');

    var tabActive = arrSplitUrl[arrSplitUrl.length-1];

    selectAction(tabActive);
}

if (typeof(Storage) !== 'undefined') {
    onloadBody = () =>
    {
        fetchListTodos();
        getTabTodos();
        countItemCompletedFromLocalStorage();
    };

    function runScript(e)
    {
        if(e.characterCode == 13 || e.keyCode == 13)
        {
            var nodeInputTodo = document.getElementById('input_todo');
            var txt_todo = nodeInputTodo.value;

            if(!isEmpty(txt_todo))
            {
                // =============save to local storage================= //
                var todo = {
                    title: txt_todo,
                    completed: false,
                    id: getTimeToSaveId()
                };

                var oldTodos =  JSON.parse(getItemInLocalStorage('todos')) || []; // obj

                oldTodos.push(todo);

                // Put the object into storage
                setItemInLocalStorage('todos', JSON.stringify(oldTodos));

                // ============Append to html================== //
                var str = makeHtmlTodo(todo);

                addTodoToTodos(str);

                // clear input to_do to empty
                nodeInputTodo.value = '';

                displayFooter();

                // ========== count to_do ==========
                reCountTodo('asc');

            }
            return false; // returning false will prevent the event from bubbling up.
        }
    }

    // toggele checkbox
    function toggleCheckAllCheckbox(source) {
        var checkboxes = document.getElementsByClassName('checkbox');

        for(var i=0; i<checkboxes.length; i++)
        {
            checkboxes[i].checked = source.checked;
        }

    }

    // event delete a to_do
    function destroyATodo(item) {
        var listTodo = JSON.parse(getItemInLocalStorage('todos')) || [];

        var lengthTodos = listTodo.length;

        if (lengthTodos > 0)
        {
            var idTodo = getIdNodeTodo(item);

            for (var i=0; i<lengthTodos; i++) {
                if (idTodo == listTodo[i].id.toString()) {
                    listTodo.splice(i, 1);
                    break;
                }
            }

            setItemInLocalStorage('todos', JSON.stringify(listTodo));

            removeHtmlTodo(item);

            var countTodos = reCountTodo('des');

            if (countTodos == 0)
            {
                hideFooter();
            }
        }
    }

    clearATodo = () =>
    {
        console.log('doing clear completed todo');

        var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];

        // console.log(localTodos);

        var lengthLocalTodos = localTodos.length;

        var arrCompleteTodo = getCompletedTodo('completed');

        //console.log(arrCompleteTodo);

        var lengthArrCompleteTodo = arrCompleteTodo.length;

        var indexToRemove = [];

        for (var i=0; i<lengthLocalTodos; i++)
        {
            for (var j=0; j<lengthArrCompleteTodo; j++)
            {
                if (localTodos[i].id == arrCompleteTodo[j].id )
                {
                    indexToRemove.push(i);
                }
            }
        }

        var lengthIndexToRemove = indexToRemove.length;

        for(var i=0; i< lengthIndexToRemove; i++)
        {
            console.log(indexToRemove[i]);
            var localTodos = localTodos.splice(indexToRemove[i],1);
        }

        console.log(localTodos);

        setItemInLocalStorage('todos', JSON.stringify(localTodos));

        var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];
        //var lengthLocalTodosNew = localTodos.length;

        reRenderTodoByActions(localTodos);

    };

    // toggle completed a to_do
    isCompletedTodo = (item) =>
    {
        var currentNode = item.parentNode; // node view

        var idTodo = currentNode.childNodes[1].id; // string

        if (item.checked === true)
        {
            currentNode.childNodes[1].classList.add('isComplete');

            toggleCompletedTodo(idTodo);

            displayCountTodo();

            reCountTodo('des');

            displayLinkClearTodo();
        }
        else
        {
            currentNode.childNodes[1].classList.remove('isComplete');

            toggleCompletedTodo(idTodo);

            var countTodo = reCountTodo('asc');

            var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];

            if (localTodos.length == countTodo)
            {
                hideLinkClearTodo();
            }
        }
    };

    // actions todo
    function selectAction(needle) {
        // set data
        var nodeActive = document.getElementsByClassName('active');
        var nodeAll = document.getElementsByClassName('add');
        var nodeCompleted = document.getElementsByClassName('completed');

        if (nodeActive && nodeAll && nodeCompleted)
        {
            if (needle == 'all' || needle=='')
            {
                nodeActive[0].classList.remove("selected");
                nodeAll[0].classList.add("selected");
                nodeCompleted[0].classList.remove("selected");

                var allTodo = getCompletedTodo('all');
                reRenderTodoByActions(allTodo);
            }
            else if (needle == 'active')
            {
                nodeActive[0].classList.add("selected");
                nodeAll[0].classList.remove("selected");
                nodeCompleted[0].classList.remove("selected");

                var activeTodo = getCompletedTodo('active');
                reRenderTodoByActions(activeTodo);
            }
            if (needle == 'completed')
            {
                nodeActive[0].classList.remove("selected");
                nodeAll[0].classList.remove("selected");
                nodeCompleted[0].classList.add("selected");

                var completedTodo = getCompletedTodo('completed');
                reRenderTodoByActions(completedTodo);
            }
        }
    }

} else {
    console.log('This brower is not support local storage')
}