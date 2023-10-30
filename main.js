function enableButton(){
    let a = document.getElementById('loginName').value
    let b = document.getElementById('loginPassword').value
    if (a.lenght > 0 && b.lenght > 0){
        document.getElementById('login').disabled = false
    } 
    else{
        document.getElementById('login').disabled = true
    }
    
}