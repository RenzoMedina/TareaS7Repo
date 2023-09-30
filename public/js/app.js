const menu = document.getElementById("menu")
const menuItem= document.getElementById("menu-item")
const fechaAsistencia= document.getElementById("fecha_asistencia")
const justificadaNula = document.getElementById("justificacionNula")
const observacion = document.getElementById("observaciones") 
const justificadaOK = document.getElementById("justificada")
const justNoAplica = document.getElementById("JustNoAplica")
const validacionNula = document.getElementById("validacionNo")
const validacionOk = document.getElementById('validacionSi')
const timeStart = document.getElementById("time-inicio")
const timeStop = document.getElementById("time-final")

menu.addEventListener("click", ()=>{
    menuItem.classList.toggle("menu-item")
})

function fechaActual(){
    date= new Date()
    day = date.getDate();
    month = date.getMonth()+1
    year = date.getFullYear();

    result= `${year}/${month}/${day}`
    return result

}
fecha = fechaActual()
fechaAsistencia.value=fecha

justificadaNula.addEventListener("click", ()=>{
    observacion.value="No justificada"
    observacion.setAttribute("readonly","")
    observacion.classList.add("readonly")

})
justificadaOK.addEventListener("click", ()=>{
    observacion.value=""
    observacion.removeAttribute("readonly")
    observacion.focus()
    observacion.classList.remove("readonly")
    observacion.setAttribute("required","")
 })
 
 validacionOk.addEventListener("click", ()=>{
     justificadaNula.setAttribute("disabled", "")
     justificadaOK.setAttribute("disabled", "")
 })
validacionNula.addEventListener("click", ()=>{
    timeStart.value="00:00"
    timeStart.setAttribute("readonly","")
    timeStart.classList.add("readonly")
    timeStop.value="00:00"
    timeStop.setAttribute("readonly","")
    timeStop.classList.add("readonly")
    justificadaNula.removeAttribute("disabled")
    justificadaOK.removeAttribute("disabled")
    observacion.value=""

})
justNoAplica.addEventListener("click", ()=>{
    observacion.value="N/A"
    observacion.setAttribute("readonly","")
    observacion.classList.add("readonly")
})


