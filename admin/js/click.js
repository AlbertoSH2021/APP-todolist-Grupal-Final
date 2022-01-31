const imagenes=document.querySelectorAll('.img-galeria')
const imagenesLight=document.querySelector('.agregar-imagen')
const contenedorLight=document.querySelector('.imagen-light')

/*console.log(imagenes)
console.log(imagenesLight)
console.log(contenedorLight)*/
const hamburguer1=document.querySelector('.hamburguesa');

imagenes.forEach(imagen=>{
    imagen.addEventListener('click',()=>{
        aparecerimagen(imagen.getAttribute('src'))
    })
})
contenedorLight.addEventListener('click',(e)=>{
    if(e.target !==imagenesLight){
        contenedorLight.classList.toggle('show')
        imagenesLight.classList.toggle('showImage')

        /*opacidad de 1 al icono de menu*/ 
        hamburguer1.style.opcity='1'
    }
})
/*Desaparecer el icono de munu=hamburguesa con opacidad de 0*/
const aparecerimagen=(imagen)=>{
    imagenesLight.src=imagen;
    contenedorLight.classList.toggle('show')
    imagenesLight.classList.toggle('showImage')

    /**/ 
    hamburguer1.style.opcity='0'
}
