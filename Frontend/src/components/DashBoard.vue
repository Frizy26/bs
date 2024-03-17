<script setup>

</script>

<template>
  <nav class="sidebar">
    <header>
      <div class="image-text">
        <span class="image">
          <img src="../../image/B.png" alt="logo"/>
          <img src="../../image/S.png" alt=""/>
        </span>
      </div>
      <div class="bestmods">
      <span class="Best">
          <img src="../../image/BEST MODS.png" alt="" />
        </span>
      </div>
    </header>

    <div class="menu-bar">
      <div class="menu">
        <ul>
        <li class="nav-link">
          <a href="#">
          <img src="../../image/Profile-icon.png" alt="" />
          <span class="text nav-text">Профиль</span>
          </a>
        </li>
        </ul>
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Like.png" alt=""/>
            <span class="text nav-text">Избранное</span>
          </a>
        </li>
        </ul>
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Search.png" alt=""/>
            <span class="text nav-text">Поиск</span>
          </a>
        </li>
        </ul>
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Cart-btn-menu.png" alt="" />
            <span class="text nav-text">Каталог</span>
          </a>
        </li>
        </ul>
      </div>


      <div class="category-list" >
        <ul>
        <li class="menu-category">
          <a href="#">
            <img src="../../image/Arrow-down.png" alt=""/>
            <span class="category-size">Категории</span>
          </a>
        </li>
        </ul>
      </div>

      <div class="menu-folder">
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Clothes.png" alt=""/>
            <span class="text nav-text">Одежда</span>
          </a>
        </li>
        </ul>
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Graphics.png" alt=""/>
            <span class="text nav-text">Графика</span>
          </a>
        </li>
        </ul>
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Guns.png"  alt=""/>
            <span class="text nav-text">Оружие</span>
          </a>
        </li>
        </ul>
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Redux.png" alt="" />
            <span class="text nav-text">Редукс</span>
          </a>
        </li>
        </ul>
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Maps.png" alt=""/>
            <span class="text nav-text">Карты</span>
          </a>
        </li>
        </ul>
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Sounds.png" alt=""/>
            <span class="text nav-text">Звуки</span>
          </a>
        </li>
        </ul>
      </div>

     <div class="menu-folder-now">
      <div class="menu-folder">
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Discord.png" alt=""/>
            <span class="text nav-text">Одежда</span>
          </a>
        </li>
        </ul>
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/Support.png" alt="" />
            <span class="text nav-text">Графика</span>
          </a>
        </li>
        </ul>
        <ul>
        <li class="nav-link">
          <a href="#">
            <img src="../../image/I.png" alt=""/>
            <span class="text nav-text">Оружие</span>
          </a>
        </li>
        </ul>
      </div>
     </div>
    </div>
  </nav>
</template>


<style>
.sidebar{
  border-radius: 0 0 25px 0;
  position: fixed;
  top: 0;
  left: 0;
  height: 90vh;
  width: 250px;
  padding: 25px 10px;
  background: var(--Main-Background);
}
.sidebar .image-text img{
  padding: 0;
  height: auto;
  width: auto;
}
.sidebar .Best {
display: flex;
  height: auto;
  width: auto;
}
header {
  display: flex;
}
.image{
  padding-left: 20px;
  padding-right: 25px;
}
.menu-bar  img{
  width: auto;
  height: auto;
}
.sidebar li a{
  display: flex;
  align-items: center;
  text-decoration: none;

}
.sidebar li{
  padding-top: 25px;
  list-style: none;
  display: flex;
  align-items: center;
}
.nav-text{
  padding-left: 40px;
  color: var(--Title-h2);
  font-size: 16px;
}
.menu-bar{
  padding-top: 25px;
  padding-left: 20px;
}
.sidebar .category-list img{
  padding-top: 25px;
  height: auto;
}
.category-size{
  padding-top: 24px;
  font-size: 18px;
  padding-left: 40px;
  color: var(--Title-h1);
}
.menu-folder-now{
  padding-top:25px
}

</style>