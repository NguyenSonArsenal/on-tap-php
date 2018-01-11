function getTimeToSaveId() {
    var d = new Date();
    var n = d.getTime();
    return n;
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

function setItemInLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

function getItemInLocalStorage(key, valueDefault)
{
    return localStorage.getItem() || valueDefault
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

        var isCompleted = arrTodo[i].completed == true ? 'isComplete' : '';

        var checked = arrTodo[i].completed == true ? 'checked' : '';

        var str =
            '<input class="checkbox" '+checked+' type="checkbox" onclick = "completedTodo(this)">' +
            '<label class='+isCompleted+' id='+arrTodo[i].id+'>'+arrTodo[i].title+'</label>' +
            '<a class="destroy"  onclick="destroyATodo(this)">' +
            '<i class="fa fa-trash-o" aria-hidden="true"></i>' +
            '</a>';

        var nodeTmp = document.createElement('div');
        nodeTmp.setAttribute('class', 'view');
        nodeTmp.innerHTML = str ;

        nodeMain[0].appendChild(nodeTmp);
    }
}

function changeTotalTodoUnit(needle) {
    var countTodo = localStorage.getItem('count');

    if (needle == 'des')
    {
        countTodo--;
    }
    else if (needle == 'asc')
    {
        countTodo++;
    }

    localStorage.setItem('count', countTodo);
    document.getElementById('count_todo').innerHTML = countTodo;
    return countTodo;
}


function getCompletedTodo(needle) {
    var localTodos = localStorage.getItem('todos');

    var arrLocalTmp = convertJsonTodoToArray(localTodos);

    var lengthArrLocalTmp = arrLocalTmp.length;
    var arrCompleteTodo = [];

    var arrActiveTodo = [];

    if (needle == 'completed')
    {
        for (var i=0; i<lengthArrLocalTmp; i++)
        {
            if (arrLocalTmp[i].completed == true)
            {
                arrCompleteTodo.push(arrLocalTmp[i]);
            }
        }
        return arrCompleteTodo;
    }
    else if (needle == 'active')
    {
        for (var i=0; i<lengthArrLocalTmp; i++)
        {
            if (arrLocalTmp[i].completed == false)
            {
                arrActiveTodo.push(arrLocalTmp[i]);
            }
        }
        return arrActiveTodo;
    }

    return arrLocalTmp;
}


function convertJsonTodoToArray(json) {
    if (json)
    {
        if (json.length > 2)
        {
            var localTmp = json.substring(1, json.length-1);
            var arrLocalTmp = localTmp.split('},');
            var lengthArrLocalTmp = arrLocalTmp.length;
            for (var i=0; i<lengthArrLocalTmp; i++)
            {
                if(i != lengthArrLocalTmp-1)
                {
                    arrLocalTmp[i]+='}';

                }
                arrLocalTmp[i] = JSON.parse(arrLocalTmp[i])
            }
            return arrLocalTmp;
        }
    }
    return false;
}

function fetchListTodos()
{
    var localTodos = getItemInLocalStorage('todos', []);

    if (localTodos)
    {
        // ==========convert string json todos to array ========== //
        var arrLocalTmp = convertJsonTodoToArray(localTodos);

        var lengthArrLocalTmp = arrLocalTmp.length;

        // ========== append todos to html from local storage =========== //
        for (var i=0; i < lengthArrLocalTmp; i++)
        {
            var isCompleted = arrLocalTmp[i].completed == true ? 'isComplete' : '';

            if (arrLocalTmp[i].completed == false)
            {
                var str =
                    '<input class="checkbox" type="checkbox" onclick = "completedTodo(this)">' +
                    '<label id='+arrLocalTmp[i].id+'>'+arrLocalTmp[i].title+'</label>' +
                    '<a class="destroy"  onclick="destroyATodo(this)">' +
                    '<i class="fa fa-trash-o" aria-hidden="true"></i>' +
                    '</a>';
            }
            else
            {
                var str =
                    '<input class="checkbox" checked type="checkbox" onclick = "completedTodo(this)">' +
                    '<label class="isComplete" id='+arrLocalTmp[i].id+'>'+arrLocalTmp[i].title+'</label>' +
                    '<a class="destroy"  onclick="destroyATodo(this)">' +
                    '<i class="fa fa-trash-o" aria-hidden="true"></i>' +
                    '</a>';
            }

            var nodeTmp = document.createElement('div');
            nodeTmp.setAttribute('class', 'view');
            nodeTmp.innerHTML = str ;

            var node = document.getElementsByClassName('main'); // NodeList : object HTMLCollection

            // add a to_do to main to_do
            node[0].appendChild(nodeTmp);

            // show to_do main and footer
            var nodeFooter = document.getElementsByClassName('footer');
            nodeFooter[0].style.display = 'inline-flex';

            var countTodo = localStorage.count || 0;
            document.getElementById('count_todo').innerHTML = countTodo;
        }
    }
}

if (typeof(Storage) !== 'undefined') {
    // add input_todo to list todo

    onloadBody = () =>
    {
        fetchListTodos();
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

                var oldTodos =  JSON.parse(localStorage.getItem('todos')) || [];

                oldTodos.push(todo);

                // Put the object into storage
                localStorage.setItem('todos', JSON.stringify(oldTodos));

                // ============Append to html================== //
                var str =
                    '<input class="checkbox" type="checkbox" onclick = "completedTodo(this)">' +
                    '<label id='+todo.id+'>'+todo.title+'</label>' +
                    '<a class="destroy"  onclick="destroyATodo(this)">' +
                    '<i class="fa fa-trash-o" aria-hidden="true"></i>' +
                    '</a>';

                var nodeTmp = document.createElement('div');
                nodeTmp.setAttribute('class', 'view');
                nodeTmp.innerHTML = str ;

                var node = document.getElementsByClassName('main'); // NodeList : object HTMLCollection

                // add a to_do to main to_do
                node[0].appendChild(nodeTmp);

                // clear input to_do to empty
                nodeInputTodo.value = '';

                // show to_do main and footer
                var nodeFooter = document.getElementsByClassName('footer');
                nodeFooter[0].style.display = 'inline-flex';


                // ========== count to_do ==========
                changeTotalTodoUnit('asc');

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

    // event delete a todo
    function destroyATodo(item) {
        var todos =  localStorage.getItem('todos') || [];

        if (todos) {

            var idTodo = getIdNodeTodo(item);

            // ========== remove html to_do========== //
            var currentNode = item.parentNode;
            var mainNode = currentNode.parentNode;
            mainNode.removeChild(currentNode);

            var arrLocalTmp = convertJsonTodoToArray(todos);
            var lengthArrLocalTmp = arrLocalTmp.length;

            for (var i=0; i < lengthArrLocalTmp; i++) {

                if (idTodo == arrLocalTmp[i].id.toString())
                {
                    arrLocalTmp.splice(i, 1);
                    break;
                }
            }

            localStorage.setItem('todos', JSON.stringify(arrLocalTmp));

            // =========== descending count a unit ========== //
            var countTodo = changeTotalTodoUnit('des');

            if (countTodo == 0)
            {
                // hide to_do main and footer
                var nodeFooter = document.getElementsByClassName('footer');
                nodeFooter[0].style.display = 'none';
            }
        }
    }

    clearATodo = () =>
    {
        var nodeMain = document.getElementsByClassName('main');
        var elementUnActive =document.querySelectorAll('.view .un_active');

        var total = elementUnActive.length;

        for (var i=0; i<total; i++)
        {
            var nodeToClear = elementUnActive[i].parentNode;
            nodeMain[0].removeChild(nodeToClear);
        }
    };

    // completed a to_do
    completedTodo = (item) =>
    {
        console.log(item.checked);
        var currentNode = item.parentNode; // node view



        var idTodo = currentNode.childNodes[1].id; // string

        if (item.checked === true)
        {
            var localTodos = localStorage.getItem('todos');
            console.log('checked');
            currentNode.childNodes[1].classList.add('isComplete');

            if (localTodos)
            {
                // ==========convert string json todos to array ========== //
                var arrLocalTmp = convertJsonTodoToArray(localTodos);

                var lengthArrLocalTmp = arrLocalTmp.length;

                // ========== append todos to html from local storage =========== //
                for (var i=0; i < lengthArrLocalTmp; i++) {
                    if (idTodo == arrLocalTmp[i].id.toString())
                    {
                        console.log('nnn');
                        var tmp = arrLocalTmp[i].completed;
                        arrLocalTmp[i].completed = !tmp;
                    }
                }
            }

            localStorage.setItem('todos', JSON.stringify(arrLocalTmp));

            var countTodo = changeTotalTodoUnit('des');

        }
        else
        {
            var localTodos = localStorage.getItem('todos');
            console.log('unchecked');
            currentNode.childNodes[1].classList.remove('isComplete');

            if (localTodos)
            {
                // ==========convert string json todos to array ========== //
                var arrLocalTmp = convertJsonTodoToArray(localTodos);

                var lengthArrLocalTmp = arrLocalTmp.length;

                // ========== append todos to html from local storage =========== //
                for (var i=0; i < lengthArrLocalTmp; i++) {
                    if (idTodo == arrLocalTmp[i].id.toString())
                    {

                        var tmp = arrLocalTmp[i].completed;
                        arrLocalTmp[i].completed = !tmp;
                    }
                }
            }

            localStorage.setItem('todos', JSON.stringify(arrLocalTmp));

            var countTodo = changeTotalTodoUnit('asc');

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
            if (needle == 'all')
            {
                nodeActive[0].classList.remove("selected");
                nodeAll[0].classList.add("selected");
                nodeCompleted[0].classList.remove("selected");

                var allTodo = getCompletedTodo('all');
                console.log(allTodo);
                reRenderTodoByActions(allTodo);

                localStorage.setItem = ('action', 'all');
            }
            else if (needle == 'active')
            {
                nodeActive[0].classList.add("selected");
                nodeAll[0].classList.remove("selected");
                nodeCompleted[0].classList.remove("selected");

                var activeTodo = getCompletedTodo('active');
                console.log(activeTodo);
                reRenderTodoByActions(activeTodo);

                localStorage.setItem = ('action', 'active');
            }
            if (needle == 'completed')
            {
                nodeActive[0].classList.remove("selected");
                nodeAll[0].classList.remove("selected");
                nodeCompleted[0].classList.add("selected");

                var completedTodo = getCompletedTodo('completed');
                console.log(completedTodo);
                reRenderTodoByActions(completedTodo);

                localStorage.setItem = ('action', 'completed');
            }
        }
    }

} else {
    console.log('This brower is not support local storage')
}