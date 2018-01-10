if (typeof(Storage) !== 'undefined') {

    // Kiem tra input co empty khong ?
    function isEmpty(str) {
        return (!str || 0 === str.length || !str.trim());
    }

    // add input_todo to list todo
    function runScript(e)
    {
        if(e.characterCode == 13 || e.keyCode == 13)
        {
            var nodeInputTodo = document.getElementById('input_todo');
            var txt_todo = nodeInputTodo.value;

            if(!isEmpty(txt_todo))
            {
                countTodo = localStorage.count || 0;
                countTodo++;
                localStorage.setItem('count', countTodo);

                localStorage.str =
                    '<input class="checkbox" type="checkbox" onclick = "unActiveTodo(this)">' +
                    '<label class="">'+txt_todo+'</label>' +
                    '<a class="destroy"  onclick="destroyATodo(this)">' +
                        '<i class="fa fa-trash-o" aria-hidden="true"></i>' +
                    '</a>';

                var nodeTmp = document.createElement('div');
                nodeTmp.setAttribute('class', 'view');
                nodeTmp.innerHTML = localStorage.str ;

                var node = document.getElementsByClassName('main'); // NodeList : object HTMLCollection

                // add a to_do to main to_do
                node[0].appendChild(nodeTmp);

                // clear input to_do to empty
                nodeInputTodo.value = '';

                // show to_do main and footer
                var nodeFooter = document.getElementsByClassName('footer');
                nodeFooter[0].style.display = 'inline-flex';

                document.getElementById('count_todo').innerHTML = countTodo;
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

        var countTodo = localStorage.getItem('count') || 0;

        countTodo--;

        localStorage.setItem('count', countTodo);

        if (countTodo == 0)
        {
            // hide to_do main and footer
            var nodeFooter = document.getElementsByClassName('footer');
            nodeFooter[0].style.display = 'none';
        }

        var currentNode = item.parentNode;
        var mainNode = currentNode.parentNode;
        mainNode.removeChild(currentNode);

        document.getElementById('count_todo').innerHTML = countTodo;
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


    // unActive a to_do
    unActiveTodo = (item) =>
    {
        var currentNode = item.parentNode;

        if (item.checked === true)
        {
            currentNode.childNodes[1].classList.add('un_active');

            count--;
            document.getElementById('count_todo').innerHTML = count;

            var nodeClearCompleted = document.getElementsByClassName('clear');
        }
        else
        {
            currentNode.childNodes[1].classList.remove('un_active');

            count++;
            document.getElementById('count_todo').innerHTML = count;
        }


        var lengthClassUnActive =document.querySelectorAll('.view .un_active').length;

        var nodeClearCompleted = document.getElementsByClassName('clear');

        if (lengthClassUnActive == 0)
        {
            nodeClearCompleted[0].style.display = 'none';
        }
        else
        {
            nodeClearCompleted[0].style.display = 'block';
        }
    };

    // actions todo
    function selectAction(needle) {
        // set data
        localStorage.local_nodeActive = document.getElementsByClassName('active');
        localStorage.local_nodeAll = document.getElementsByClassName('add');
        localStorage.local_nodeCompleted = document.getElementsByClassName('completed');

        var nodeActive = localStorage.getItem('local_nodeActive');
        var nodeAll = localStorage.getItem('local_nodeAll');
        var nodeCompleted = localStorage.getItem('local_nodeCompleted');

        console.log(nodeActive[0]);

        if (nodeActive && nodeAll && nodeCompleted)
        {
            // if (needle == 'active')
            // {
            //     localStorage.nodeActive[0].classList.add("selected");
            //     localStorage.nodeAll[0].classList.remove("selected");
            //     localStorage.nodeCompleted[0].classList.remove("selected");
            //
            //     //var nodeView = document.getElementsByClassName('view');
            //     //console.log(nodeView[0].childNodes);
            // }
            // else if (needle == 'all')
            // {
            //     localStorage.nodeActive[0].classList.remove("selected");
            //     localStorage.nodeAll[0].classList.add("selected");
            //     localStorage.nodeCompleted[0].classList.remove("selected");
            //
            //     localStorage.nodeMain = document.getElementsByClassName('main');
            //     localStorage.nodeMain[0].style.display = 'block';
            // }
            if (needle == 'completed')
            {
                // nodeActive[0].classList.remove("selected");
                // nodeAll[0].classList.remove("selected");
                // nodeCompleted[0].classList.add("selected");

                //localStorage.nodeMain = document.getElementsByClassName('main');
                //localStorage.nodeMain[0].style.display = 'none';

            }
        }
    }

} else {
    console.log('This brower is not support local storage')
}