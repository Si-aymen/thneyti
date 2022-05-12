function shuffle(array){

    var currentIndex = array.length,
    randomIndex;    
    while(0 !==currentIndex){
        randomIndex     = Math.floor(Math.random() * currentIndex);
        currentIndex--;
        [array[currentIndex],array[randomIndex]] = [
            array[currentIndex],
            array[currentIndex],
            

        ];
    
    } 
    return array;
}
function spin(){
    wheel.play();
    const box = document.getElementById("box");
    const element = document.getElementById("mainbox");
    let SelectedItem="";
    let AC = shuffle([1890,2250,2610]);
    let Camera = shuffle([1850,2210,2570]);
    let Zonk = shuffle([1770,2130,2490]);
    let PS = shuffle([1810,2170,2530]);
    let Headset = shuffle([1750,2110,2470]);
    let Drone = shuffle([1630,1990,2350]);
    let ROG = shuffle([1570,1930,2290]);
    let results =shuffle ([
        AC[0],
        Camera[0],
        Zonk[0],
        PS[0],
        Headset[0],
        Drone[0],
        ROG[0],
    ]);

if  (AC.includes(results[0])) SelectedItem="FREE ride  ";
 

if  (Camera.includes(results[0])) SelectedItem="  bon d'achat ";

if  (Zonk.includes(results[0])) SelectedItem="couvre voulant";

if  (PS.includes(results[0])) SelectedItem="porte-clés ";

if  (Headset.includes(results[0])) SelectedItem=" support telephone ";

if  (Drone.includes(results[0])) SelectedItem=" Valeo Beep & Park";

if  (ROG.includes(results[0]))  SelectedItem="vidange ";

box.style.setProperty("transition","all ease 10s");
box.style.transform  ="rotate(" + results[0] + "deg)";
element.classList.remove("animate");
setTimeout(function(){
    element.classList.add("animate");

},5000);
setTimeout(
    function(){
applause.play();
    Swal.fire({
        title: 'Horayyyyy....',
        html: 'You won 🎁' + SelectedItem  + ' | ' + '<a href="#"style="text-decoration:none;color:blue" > claim Now </a>',
        imageUrl: './assets/Logo1.png',
        imageWidth: 200,
        imageHeight: 200,
        imageAlt: 'Custom image',
      })
},5500)
setTimeout(function(){
    box.style.setProperty("transition","initial");
    box.style.transform = "rotate(90deg)";
},6000);
}       