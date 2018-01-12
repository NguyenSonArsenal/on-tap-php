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



function getIdNodeTodo(item) {
    var currentNode = item.parentNode;
    var idTodo = currentNode.childNodes[1].id;

    return idTodo;
}

function reRenderTodos(arrTodo) {
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


function makeHtmlTodo(todo) {
    var isCompleted = todo.completed == true ? 'isComplete' : 'xxx';

    var isChecked = todo.completed == true ? 'checked' : 'xxx';

    var str =
        '<input class="checkbox" '+isChecked+' type="checkbox" onclick = "checkCompletedTodo(this)">' +
        '<label class='+isCompleted+' id='+todo.id+'>'+todo.title+'</label>' +
        '<a class="destroy"  onclick="destroyATodo(this)">' +
            '<i class="fa fa-trash-o" aria-hidden="true"></i>' +
        '</a>'+
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


function toggleStatusCompletedTodo(id) {
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

    setItemInLocalStorage('tabActive', tabActive);

    selectAction(tabActive);
}

function hideCheckboxHeader()
{
    var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];

    if (localTodos.length == 0)
    {
        var nodeCheckboxHeader = document.getElementById('toggle_check_all_checkbox');
        nodeCheckboxHeader.style.display = 'none';
    }
}

function displayCheckboxHeader()
{

    // if count localTodos > 0 then display checkbox header
    var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];

    var nodeCheckboxHeader = document.getElementById('toggle_check_all_checkbox');

    if (localTodos.length > 0)
    {
        nodeCheckboxHeader.style.display = 'inline-block';

        // get status of local checkbox header
        var localCheckAllCheckbox = getItemInLocalStorage('checkAllCheckBox');
        var isActiveCheckAllCheckbox = localCheckAllCheckbox == 'true'  ? activeCheckAllCheckboxHeader()
                                                                        :  unActiveCheckAllCheckboxHeader();
    }
}


function activeCheckAllCheckboxHeader() {
    var node = document.getElementById('toggle_check_all_checkbox');
    node.checked = true;

    setItemInLocalStorage('checkAllCheckBox', true);
}

function unActiveCheckAllCheckboxHeader() {
    var node = document.getElementById('toggle_check_all_checkbox');
    node.checked = false;

    setItemInLocalStorage('checkAllCheckBox', false);
}


if (typeof(Storage) !== 'undefined') {
    onloadBody = () =>
    {
        fetchListTodos();
        getTabTodos();
        countItemCompletedFromLocalStorage();
        displayCheckboxHeader();
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

                setItemInLocalStorage('todos', JSON.stringify(oldTodos));

                // ============Append to html================== //
                var localTabActive = getItemInLocalStorage('tabActive');

                if (localTabActive != 'completed')
                {
                    var str = makeHtmlTodo(todo);
                    addTodoToTodos(str);
                }

                if (localTabActive == 'all' || localTabActive == '')
                {
                    unActiveCheckAllCheckboxHeader();
                }

                nodeInputTodo.value = '';

                displayFooter();

                reCountTodo('asc');

                displayCheckboxHeader();

            }
            return false; // returning false will prevent the event from bubbling up.
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

        hideCheckboxHeader();
    }



    // toggele checkbox
    function toggleCheckAllCheckbox(source) {

        // ========== handle save to local storage ========== //
        var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];

        var lengthLocalTodos = localTodos.length;

        var nodeViewTodo = document.getElementsByClassName('view');

        if (source.checked == true)
        {
            setItemInLocalStorage('checkAllCheckBox',true);

            var localTabActive = getItemInLocalStorage('tabActive');

            if (localTabActive == 'active')
            {
                var nodeMain = document.getElementsByClassName('main');

                while (nodeMain[0].firstChild) {
                    nodeMain[0].removeChild(nodeMain[0].firstChild);
                }

                for (var i=0; i<lengthLocalTodos; i++)
                {
                    if (localTodos[i].completed != true)
                    {
                        localTodos[i].completed = true;
                        reCountTodo('des');
                    }
                }
            }
            else
            {
                for (var i=0; i<lengthLocalTodos; i++)
                {
                    if (localTodos[i].completed != true)
                    {
                        localTodos[i].completed = true;
                        reCountTodo('des');
                    }
                    nodeViewTodo[i].childNodes[1].classList.add('isComplete');
                }
            }
            displayLinkClearTodo();
        }
        else // un check checkbox
        {
            var localTabActive = getItemInLocalStorage('tabActive');

            setItemInLocalStorage('checkAllCheckBox',false);

            if (localTabActive == 'active')
            {
                for (var i=0; i<lengthLocalTodos; i++)
                {
                    if (localTodos[i].completed == true)
                    {
                        localTodos[i].completed = false;
                        reCountTodo('asc');
                    }
                }

                reRenderTodos(localTodos);
                //setItemInLocalStorage('todos', JSON.stringify(localTodos));
            }
            else
            {
                for (var i=0; i<lengthLocalTodos; i++)
                {
                    if (localTodos[i].completed == true)
                    {
                        localTodos[i].completed = false;
                        reCountTodo('asc');
                    }
                    nodeViewTodo[i].childNodes[1].classList.remove('isComplete');
                }
            }
            hideLinkClearTodo();
        }

        setItemInLocalStorage('todos', JSON.stringify(localTodos));

        // ========== display checkallbox on screen ========== //
        var checkboxes = document.getElementsByClassName('checkbox');

        for(var i=0; i<checkboxes.length; i++)
        {
            checkboxes[i].checked = source.checked;
        }
    }


    removeTodosCompleted = () =>
    {
        var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];

        var lengthLocalTodos = localTodos.length;

        var localTodosAfterClearCompleted = [];

        for (var  i=0; i<lengthLocalTodos; i++)
        {
            if (!localTodos[i].completed)
            {
                localTodosAfterClearCompleted.push(localTodos[i]);
            }
        }

        setItemInLocalStorage('todos', JSON.stringify(localTodosAfterClearCompleted));


        var localTabAvtive = getItemInLocalStorage('tabActive');

        if (localTabAvtive == 'completed')
        {
            var nodeMain = document.getElementsByClassName('main');

            while (nodeMain[0].firstChild) {
                nodeMain[0].removeChild(nodeMain[0].firstChild);
            }
        }
        else
        {
            reRenderTodos(localTodosAfterClearCompleted);
        }

        hideLinkClearTodo();

        var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];

        if (localTodos.length == 0)
        {
            hideCheckboxHeader();
            hideFooter();
        }
        unActiveCheckAllCheckboxHeader();

    };

    // toggle completed a to_do
    checkCompletedTodo = (item) =>
    {
        var currentNode = item.parentNode; // node view

        var idTodo = currentNode.childNodes[1].id; // string

        var localTabAvtive = getItemInLocalStorage('tabActive');

        if (item.checked === true)
        {
            displayLinkClearTodo();

            if (localTabAvtive == 'all')
            {
                currentNode.childNodes[1].classList.add('isComplete');

                toggleStatusCompletedTodo(idTodo);

                var countTodos = reCountTodo('des');

                if (countTodos == 0)
                {
                    activeCheckAllCheckboxHeader();
                }

            }
            else if(localTabAvtive == 'active')
            {
                removeHtmlTodo(item);

                reCountTodo('des');

                toggleStatusCompletedTodo(idTodo);
            }
        }
        else
        {
            if (localTabAvtive == 'all')
            {
                currentNode.childNodes[1].classList.remove('isComplete');

                toggleStatusCompletedTodo(idTodo);

                var countTodo = reCountTodo('asc');

                var localTodos = JSON.parse(getItemInLocalStorage('todos')) || [];

                if (localTodos.length == countTodo)
                {
                    hideLinkClearTodo();
                }

                unActiveCheckAllCheckboxHeader();
            }
            else if (localTabAvtive == 'completed')
            {
                //currentNode.childNodes[1].classList.remove('isComplete');

                removeHtmlTodo(item);

                reCountTodo('asc');

                toggleStatusCompletedTodo(idTodo);
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

                setItemInLocalStorage('tabActive', 'all');

                var allTodo = getCompletedTodo('all');
                reRenderTodos(allTodo);
            }
            else if (needle == 'active')
            {
                nodeActive[0].classList.add("selected");
                nodeAll[0].classList.remove("selected");
                nodeCompleted[0].classList.remove("selected");

                setItemInLocalStorage('tabActive', 'active');

                var activeTodo = getCompletedTodo('active');
                reRenderTodos(activeTodo);
            }
            if (needle == 'completed')
            {
                nodeActive[0].classList.remove("selected");
                nodeAll[0].classList.remove("selected");
                nodeCompleted[0].classList.add("selected");

                setItemInLocalStorage('tabActive', 'completed');

                var completedTodo = getCompletedTodo('completed');
                reRenderTodos(completedTodo);
            }
        }
    }

} else {
    console.log('This brower is not support local storage')
}