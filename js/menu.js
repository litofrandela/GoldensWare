const nav = document.querySelector("#no_ver");
const abrir = document.querySelector("#abrir");
const cerrar =document.querySelector("#cerrar");
const c = document.querySelector("#c");
const ce = document.querySelector("#ce");
const cer = document.querySelector("#cer");
const logo = document.querySelector("#logo");
const formulario = document.querySelector("#aparecer");
const foe = document.querySelector("#foe");
const cere = document.querySelector("#cere");
const cabe = document.querySelector("#cabe");

formulario.addEventListener("click", () =>{
    foe.classList.add("aparecer");
})

formulario.addEventListener("click", () =>{
    foe.classList.remove("fx");
})

cere.addEventListener("click", () =>{
    foe.classList.add("fx");
})

cere.addEventListener("click", () =>{
    foe.classList.remove("aparecer");
})

abrir.addEventListener("click", () => {
    cabe.classList.add("esspa");
})

cerrar.addEventListener("click", () => {
    cabe.classList.remove("esspa");
})

abrir.addEventListener("click", () => {
    abrir.classList.add("ocultar");
})

cerrar.addEventListener("click", () => {
    abrir.classList.remove("ocultar");
})

c.addEventListener("click", () => {
    abrir.classList.remove("ocultar");
})

c.addEventListener("click", () => {
    cabe.classList.remove("esspa");
})

ce.addEventListener("click", () => {
    abrir.classList.remove("ocultar");
})

ce.addEventListener("click", ()=>{
    cabe.classList.remove("esspa");
})

cer.addEventListener("click", () => {
    abrir.classList.remove("ocultar");
})

cer.addEventListener("click", ()=>{
    cabe.classList.remove("esspa");
})

abrir.addEventListener("click", () => {
    logo.classList.add("ver");
})

cerrar.addEventListener("click", () => {
    logo.classList.remove("ver");
})

c.addEventListener("click", () => {
    logo.classList.remove("ver");
})

ce.addEventListener("click", () => {
    logo.classList.remove("ver");
})

cer.addEventListener("click", () => {
    logo.classList.remove("ver");
})

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})

c.addEventListener("click", () => {
    nav.classList.remove("visible");
})

ce.addEventListener("click", () => {
    nav.classList.remove("visible");
})

cer.addEventListener("click", () => {
    nav.classList.remove("visible");
})