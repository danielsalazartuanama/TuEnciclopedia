<?php require URL_APP . '/app/views/layout/header.php'; ?>

<div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
        src="\TuEnciclopedia\public\img\sof.jpg"
        class="d-block w-100"
        alt="..."
      />
    </div>
  </div>
</div>

<div>
<h1>Principios Solid</h1>
<p>Todos sabemos que la POO (Programación Orientada a Objetos) nos permite agrupar entidades con funcionalidades parecidas o relacionadas entre sí, pero esto no implica que los programas no se vuelvan confusos o difíciles de mantener.</p>
<img src="\TuEnciclopedia\public\img\im.png"/>
<section>
    <p>De hecho, muchos programas acaban volviéndose un monstruo al que se va alimentando según se añaden nuevas funcionalidades, se realiza mantenimiento, etc…
    <br>Viendo este problema, Robert C. Martin estableció cinco directrices o principios para facilitarnos a los desarrolladores la labor de crear programas legibles y mantenibles.<br>
    Viendo este problema, Robert C. Martin estableció cinco directrices o principios para facilitarnos a los desarrolladores la labor de crear programas legibles y mantenibles.<br><br>
    Estos principios se llamaron S.O.L.I.D. por sus siglas en inglés:</p>
    <ul>
        <li><strong>S: Single responsibility principle</strong>o Principio de responsabilidad única</li>
        <li><strong>O: Open/closed principle</strong> o Principio de abierto/cerrado</li>
        <li><strong>L: Liskov substitution principle</strong> o Principio de sustitución de Liskov</li>
        <li><strong>I: Interface segregation principle</strong> o Principio de segregación de la interfaz</li>
        <li><strong>D Dependency inversion principle</strong> Principio de inversión de dependencia</li>

    </ul>
    <p>Aplicar estos principios facilitará mucho el trabajo, tanto propio como ajeno (es muy probable que tu código lo acabe leyendo muchos otros desarrolladores a lo largo de su ciclo de vida). Algunas de las ventajas de aplicarlo son:</p>
    <ul>
        <li>  Mantenimiento del código más fácil y rápido</li>
        <li> Permite añadir nuevas funcionalidades de forma más sencilla</li>
        <li>  Favorece una mayor reusabilidad y calidad del código, así como la encapsulación</li>
    </ul>
  <p>Vamos a ver en detalle cada uno de estos principios, junto a ejemplos básicos, que, a pesar de no ser aplicables en el mundo real, espero que aporten la suficiente claridad para que seas capaz de entender y aplicar estos principios en tus desarrollos.</p>

</section>
</div>

    <!-- <img src="../../../public/img/languages.jpg"> -->


<?php require URL_APP . '/app/views/layout/footer.php'; ?>