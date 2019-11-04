
let eliminar = document.getElementById('delete');

if(eliminar != null) {
    eliminar.addEventListener('click', e => {

        if(!confirm('Está seguro de eliminar esta entrada? ')) {
            e.preventDefault();
            return false;
        }

        return true;
    });
}
