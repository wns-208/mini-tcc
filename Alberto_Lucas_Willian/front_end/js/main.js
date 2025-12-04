 //selecionando a div onde a lista sera exibida
 let lista = document.getElementById('lista');
        
 let usuario = { };


 function getUsuarios(){
         isLoading = true;

     fetch('http://localhost/mini-tcc/Alberto_Lucas_Willian/back_end/gerenciamento_usuarios/listar_usuarios.php',
         {
             method: 'GET',
             headers: {
                 'Content-Type': 'application/json',
             }
         }
     )
     .then(response => response.json())
     .then(response => {
         
         /*
         Tire o parentese e coloque o nome das variaveis de acordo com o banco de dados
         */

         response.usuarios.forEach(usu => {
             // montando o visual da lista
             let row = document.createElement('div');
             row.classList.add('row');
             row.setAttribute('id', usu.cadastro_id);
             row.setAttribute('onclick', 'alert("Usuario ' + usu.cadastro_nome + ' selecionado de id ' + usu.cadastro_id + '")');

             let col = document.createElement('div');
             col.classList.add('col-12');

             let p = document.createElement('p');
             p.innerText = usu.cadastro_id+ ' - ' + usu.cadastro_nome;

             col.appendChild(p);
             row.appendChild(col);
             lista.appendChild(row);
         });

     })
     .catch(erro => {
         console.log(erro);
     })
     .finally(()=>{
         isLoading = false;
     })
 }

 