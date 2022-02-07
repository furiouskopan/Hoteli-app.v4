<template>
  <div class="bg-image obj-fit-cover" style="background-attachment: fixed; overflow-x: scroll; overflow-x: hidden; background-image:url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimg1.advisor.travel%2F1200x630px-Matka_Canyon_12.jpg&f=1&nofb=1'); height: 100vh; background-size: cover;  ">
            <Home></Home>
        <div class="container">
            <div class="row height d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Пребарувајте хотели"> <button class="btn btn-primary">Search</button> </div>
                </div>
            </div>
        </div>
        <div>
            <p class="p-5" style="font-weight: bold;">Името „Македонија“ е од старомакедонско потекло, и според преданијата доаѓа од митскиот предок Македон. 
              Како државно име почнало да се користи во VIII век пр. н. е за Кралството Македонија, Македонската Империја, па потоа на римската покраина Македонија, 
              византиската тема Македонија и денес за регионот Македонија и државата Македонија. 
              Денес се верува дека името значи „планинци“ или „висока земја“ или „високи луѓе“.
              Во 2018 година е склучен Преспанскиот договор помеѓу македонската влада, предводена од претседателот Зоран Заев и грчката влада, 
              предводена од претседателот Алексис Ципрас, со кој се утврдило името на државата за внатрешна и надворешна употреба да биде „Северна Македонија“. 
              Новото име стапило во службена употреба на 11 февруари 2019 година. 
              Сепак, и покрај промената на името, народот и медиумите сè уште ја именуваат државата едноставно како Македонија.
              Археолошките наоди покажуваат дека на просторот на Македонија постоела цивилизација уште од периодот меѓу 9000 пр. н. е. и 3500 пр. н. е. Првпат Македонското Кралство се појавува во периодот на IX век пр. н. е., а постои дилема за тоа кој бил првиот македонски крал — Каран (кој се смета за митски предок на Аргеадите) или Пердика I (прв историски крал на Кралството Македонија).
              Приближно од V век пр. н. е. Кралството Македонија станува значаен политичко-економски чинител во поширокиот регион, а негова главна надворешно-политичка дејност била сосредоточена кон односите со грчките градови-држави, при што често било сојузник со други држави (како на пр. Персија) против Грците, или пак заземало страна во некои од меѓусебните спорови на градовите, настојувајќи на тој начин да го уништи нивното единство и да ги ослаби. Филип II Македонски (359 г. пр. н. е. — 336 г. пр. н. е.), по покорувањето на Илирите и Тракијците, успеал да ја освои цела Грција. Неговиот син, Александар III Македонски (336 г. пр. н. е. — 323 г. пр. н. е.) е една од најзначајните личности во светската историја. Тој најпрвин го скршил внатрешниот отпор во проширеното Македонско Кралство, а подоцна во походот против Персија, ја уништил огромната Персиска Империја и ја проширил македонската држава на три континенти — Европа, Азија и Африка, протегајќи се на Балканскиот Полуостров и Мала Азија, Блискиот Исток, Египет и Индија, и со тоа била создадена Македонската Империја.По неговата смрт, оваа огромна империја, како резултат на несогласувањата на неговите генерали (дијадоси) околу тоа кој ќе биде негов наследник се распаднала на 3 дела и тоа: Кралство на Селевкидите, Кралство на Птолемаидите и Кралство на Антигонидите.Освојувањата на Александар III Македонски имаат суштествено значење за започнувањето на хеленистичкиот период во светската историја.
              Продорот на Римска Република на исток доведува до таканаречените Македонско-римски војни (215 г. пр. н. е. — 168 г. пр. н. е.) во кои Македонското Кралство управувано од Династијата на Антигонидите целосно потпаѓа под римска власт, а последниот македонски крал Персеј e одведен како роб во Рим. Таа станува римска провинција како дел од Римското Царство и е поделена на 2 дела — Македонија Прима и Македонија Салутарис.Територијата на денешна Македонија била поделена меѓу провинциите Македонија Салутарис и Моезија прима.По поделбата на Римското Царство во 395 г. од н. е. на Источно и Западно Римско Царство, Македонија станува дел од Источното Римско Царство или Византија.
              </p> 
        </div>
        <div>
        <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Универзитет Гоце Делчев Штип
        <a class="text-dark" href="https://www.ugd.edu.mk/">UGD</a>
        <p><b>Aвтори:</b> Мартин Танчев, Ѓорги Костов </p>     
      </div>
    </footer>        
    </div>
    </div>
</template>

<script>
import Home from '../Navbar.vue';
 export default {
    components: {
        Home,
    },
}
</script>

<style lang="scss" scoped>
body, html {
    padding: 0;
    margin: 0;
}
.slider {
    position: fixed;
    top: 10px;
    right: 20px;
    width: 150px;
    color: white;
    font-family: sans-serif;
    text-align: right;
}
.slider input {
    width: 100%;
    margin-bottom: 5px;
}
.hotel-card {
  &__img {
    height: 100%;
    object-fit: cover;
    
  }
}
footer {
     position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height:90px;
    background:#ccc;
    }
.card-body{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}
.card-body:hover {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

// Button

$color: #2194E0;

@keyframes sheen {
  0% {
    transform: skewY(-45deg) translateX(0);
  }
  100% {
    transform: skewY(-45deg) translateX(12.5em);
  }
}
.wrapper {
  display: flex;
  position: absolute;
  top: 50%;
  left: 91%;
  transform: translate(-50%, -50%);
}
.button_book {
  padding: 0.65em 1em;
  // text-align: center;
  text-decoration: none;
  color: $color;
  border: 2px solid $color;
  font-size: 18px;
  display: inline-block;
  border-radius: 0.4em;
  transition: all 0.2s ease-in-out;
  position: relative;
  overflow: hidden;
  &:before {
    content: "";
    background-color: rgba(255,255,255,0.5);
    height: 100%;
    width: 3em;
    display: block;
    position: absolute;
    top: 0;
    left: -4.5em;
    transform: skewX(-45deg) translateX(0);
    transition: none;
  }
  &:hover {
    background-color: $color;
    color: #fff;
    border-bottom: 4px solid darken($color, 10%);
    &:before {
      transform: skewX(-45deg) translateX(13.5em);
     transition: all 0.5s ease-in-out;
    }
  }
}

// Searchbar

@import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

body {
    background-color: #eee;
    font-family: "Poppins", sans-serif;
    font-weight: 300;
}

.height {
    height: 15vh;
}

.search {
    position: relative;
    // box-shadow: 0 0 40px rgba(51, 51, 51, .1)
}

.search input {
    height: 60px;
    text-indent: 25px;
    border: 2px solid #d6d4d4
}

.search input:focus {
    box-shadow: none;
    border: 2px solid blue
}

.search .fa-search {
    position: absolute;
    top: 20px;
    left: 16px
}

.search button {
    position: absolute;
    top: 5px;
    right: 5px;
    height: 50px;
    width: 110px;
    background: #0d6efd
}
</style>