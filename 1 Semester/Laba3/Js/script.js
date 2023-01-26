function Generation(min, max)
{
    return Math.floor(Math.random()* (max - min) + min);
}

function drawChess(){
    
    var flag = true;
    var number = 10;

    var table = document.getElementById('users');
    
    var table = document.createElement('table');  
    
    var tr = document.createElement('tr');
    
    var Min = parseInt(document.getElementById('Min').value);
    var Max = parseInt(document.getElementById('Max').value);

    var arr = [' ','1','2','3','4','5','6','7','8','9','10'];
  
    //генерим ячейки
    for(var i = 0; i < number; i++){
        
        var tr = document.createElement('tr');
        var td = document.createElement('td');
       
        td.innerHTML = number - i;
       
        tr.appendChild(td);// добавление элемента 
        
        for(var j = 0; j < number; j++){
            var td = document.createElement('td');// создание элемента 
            if(j == 0) 
            {
                flag=!flag;
            }
                      
            td.appendChild(document.createTextNode(`${Generation(Min, Max)}`));
            if(flag)
            {              
                td.style.background='#915f50';    
            } else
            {
                td.style.background='#ffcb9b'; 
            }               
            tr.appendChild(td);// добавление элемента 
            
            flag=!flag;
            
        }
        table.appendChild(tr);// добавление элемента 
        
    }
    var tr = document.createElement('tr');
    //генерим цифры
    for(var y = 0; y < number+1; y++){
        
        var td = document.createElement('td');// создание элемента
        td.innerHTML = arr[y];// Свойство интерфейса Element устанавливает или получает HTML или XML разметку дочерних элементов       
        tr.appendChild(td);// добавление элемента 
        
    }
    table.appendChild(tr);// добавление элемента 

    document.body.appendChild(table);// добавление элемента 
}
