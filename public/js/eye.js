const input = document.getElementById('password');
const eye = document.getElementById('ojo')

if (eye) {
    eye.addEventListener('click',()=>{
        if (input.type == 'password') {
            input.type = 'text'
        }else{
            input.type = 'password'
        }
    })
}