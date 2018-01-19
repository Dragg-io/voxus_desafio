
function writeTable(){
    $.get("../php/user/tableItens.php",
    function(data, status){
        console.log(status);
        document.getElementById('content').innerHTML = data;
    });
}

function editCustomer(id, name, tel, email){
    
    document.getElementById('customer').style.display='block';
    document.getElementById('id').value = id;
    document.getElementById('name_Customer').innerHTML = name;
    document.getElementById('name').value = name;
    document.getElementById('tel').value = tel;
    document.getElementById('email').value = email;
}

function deleteCustomer(id){
    $.post("../php/user/delete_Customer.php",
    {
        id: id
    },
    function(data, status){
        console.log(status);
        document.getElementById('Message').innerHTML = data;
    });
    writeTable();
}