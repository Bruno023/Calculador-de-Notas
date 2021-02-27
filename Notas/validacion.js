const validar=()=>{
    const NOtaMate=document.getElementById('mate').value;
    const NotaLengua=document.getElementById('lengua').value;
    const NotaEFSI=document.getElementById('efsi').value;

    if(Numero(NotaEFSI) && Numero(NotaLengua)&& Numero(NOtaMate))
    {
        return true;
    }else{
        alert('Ingrese bien las notas');
        return false;
    }
};

const Numero=nota=>
{
    if(isNaN(nota)||nota!="")
    {
        return true;
    }else{
        return false;
    }
}