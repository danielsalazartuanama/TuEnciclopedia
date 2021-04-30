<?php require URL_APP . '/app/views/layout/header.php'; ?>



    <div class="container">
      <img id="hea" src="\TuEnciclopedia\public\img\sof.jpg" alt="..."/>
    </div>



<div>
<h1><strong>Principios Solid</strong></h1><br>
<p>Todos sabemos que la POO (Programación Orientada a Objetos) nos permite agrupar entidades con funcionalidades parecidas o<br> relacionadas entre sí, pero
 esto no implica que los programas no se vuelvan confusos o difíciles de mantener.</p>
<img id="ig" src="\TuEnciclopedia\public\img\im.png"/>
<section>
    <p>De hecho, muchos programas acaban volviéndose un monstruo al que se va alimentando según se añaden nuevas funcionalidades,<br> se realiza mantenimiento, etc…<br>
    Viendo este problema, Robert C. Martin estableció cinco directrices o principios para facilitarnos a los desarrolladores la labor de crear<br> programas legibles y mantenibles.</p>
    <ul>
        <li><strong>S: Single responsibility principle</strong>o Principio de responsabilidad única</li>
        <li><strong>O: Open/closed principle</strong> o Principio de abierto/cerrado</li>
        <li><strong>L: Liskov substitution principle</strong> o Principio de sustitución de Liskov</li>
        <li><strong>I: Interface segregation principle</strong> o Principio de segregación de la interfaz</li>
        <li><strong>D Dependency inversion principle</strong> Principio de inversión de dependencia</li>

    </ul>
    <p>Aplicar estos principios facilitará mucho el trabajo, tanto propio como ajeno (es muy probable que tu código lo acabe leyendo muchos<br> otros desarrolladores a lo largo de su ciclo de vida). Algunas de las ventajas de aplicarlo son:</p>
    <ul>
        <li>  Mantenimiento del código más fácil y rápido</li>
        <li> Permite añadir nuevas funcionalidades de forma más sencilla</li>
        <li>  Favorece una mayor reusabilidad y calidad del código, así como la encapsulación</li>
    </ul>
  <p>Vamos a ver en detalle cada uno de estos principios, junto a ejemplos básicos, que, a pesar de no ser aplicables en el mundo real, espero<br> que aporten la suficiente claridad para que seas capaz de entender y aplicar estos principios en tus desarrollos.</p><br>

</section>

<section>
<h2>Principio de responsabilidad única</h2><br>
<p>Como su propio nombre indica, establece que una clase, componente o microservicio debe ser responsable de una sola cosa (el tan<br> aclamado término “decoupled” en inglés). Si por el contrario, una clase tiene varias responsabilidades, esto implica que el cambio en<br> una responsabilidad provocará la modificación en otra responsabilidad.</p><br>
<p>Considera este ejmplo:</p>
<p id="color">
  class Coche { <br> 
      String marca;<br>
         Coche(String marca){ this.marca = marca; }<br>

          String getMarcaCoche(){ return marca; }<br>

         void guardarCocheDB(Coche coche){ ... }<br>
  }
        </p>
    <p>Supongamos que debemos realizar cambios en los métodos que realizan las operaciones a la BBDD. En este caso, además de estos cambios, <br>probablemente tendríamos que tocar los nombres o tipos de las propiedades, métodos, etc, cosa que no parece muy eficiente porque solo<br> estamos modificando cosas que tienen que ver con la BBDD, ¿verdad?
Para evitar esto, debemos separar las responsabilidades de la clase,<br> por lo que podemos crear otra clase que se encargue de las operaciones a la BBDD<br>:</p>
</section>
<img id="iga" src="\TuEnciclopedia\public\img\i1.jpg"/>

</div>



    <!-- <img src="../../../public/img/languages.jpg"> -->


<?php require URL_APP . '/app/views/layout/footer.php'; ?>