<?php require URL_APP . '/app/views/layout/header.php'; ?>
<div class="container">
  <img id="hea" src="\TuEnciclopedia\public\img\sof.jpg" alt="..." />
</div>
<div>
  <h1><strong>Principios Solid</strong></h1><br>
  <p>Todos sabemos que la POO (Programación Orientada a Objetos) nos permite agrupar entidades con funcionalidades parecidas o<br> relacionadas entre sí, pero
    esto no implica que los programas no se vuelvan confusos o difíciles de mantener.
  </p>
  <img id="ig" src="\TuEnciclopedia\public\img\im.png" />
  <section>
    <p>De hecho, muchos programas acaban volviéndose un monstruo al que se va alimentando según se añaden nuevas funcionalidades,<br> se realiza mantenimiento, etc…<br>
      Viendo este problema, Robert C. Martin estableció cinco directrices o principios para facilitarnos a los desarrolladores la labor de crear<br> programas legibles y mantenibles.
    </p>
    <ul>
      <li><strong>S: Single responsibility principle</strong>o Principio de responsabilidad única</li>
      <li><strong>O: Open/closed principle</strong> o Principio de abierto/cerrado</li>
      <li><strong>L: Liskov substitution principle</strong> o Principio de sustitución de Liskov</li>
      <li><strong>I: Interface segregation principle</strong> o Principio de segregación de la interfaz</li>
      <li><strong>D Dependency inversion principle</strong> Principio de inversión de dependencia</li>
    </ul>
    <p>Aplicar estos principios facilitará mucho el trabajo, tanto propio como ajeno (es muy probable que tu código lo acabe leyendo muchos<br> otros desarrolladores a lo largo de su ciclo de vida). Algunas de las ventajas de aplicarlo son:
    </p>
    <ul>
      <li> Mantenimiento del código más fácil y rápido</li>
      <li> Permite añadir nuevas funcionalidades de forma más sencilla</li>
      <li> Favorece una mayor reusabilidad y calidad del código, así como la encapsulación</li>
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
      Para evitar esto, debemos separar las responsabilidades de la clase,<br> por lo que podemos crear otra clase que se encargue de las operaciones a la BBDD<br>:
    </p>
  </section>
  <img id="iga" src="\TuEnciclopedia\public\img\i1.jpg" /><br><br><br>

  <section>
    <h2>Principio Abierto o Cerrado</h2>
    <p>Establece que las entidades software (clases, módulos y funciones) deberían estar abiertos para suextensión, pero cerrados para su modificación.<br>
      Si seguimos con la clase Coche:</p>
    <img id="iga" src="\TuEnciclopedia\public\img\abi.jpg" /><br><br><br>
    <img id="iga" src="\TuEnciclopedia\public\img\cerr.jpg" /><br><br><br>
    <img id="iga" src="\TuEnciclopedia\public\img\cs.jpg" /><br><br><br>
  </section>

  <section>
    <h2>Principio de substitucion de Liskov</h2><br>
    <p>Declara que una subclase debe ser sustituible por su superclase, y si al hacer esto, el programa falla, estaremos violando este principio.<br>
      Cumpliendo con este principio se confirmará que nuestro programa tiene una jerarquía de clases fácil de entender y un código reutilizable.<br><br>
      Veamos un ejemplo:</p>
    <img id="iga" src="\TuEnciclopedia\public\img\cs4.jpg" /><br><br><br>
  </section>

  <section>
    <h2>Principio de Segregación de Interfaz</h2>
    <p>Este principio establece que los clientes no deberían verse forzados a depender de interfaces que no usan.Dicho de otra manera, cuando<br> un cliente depende de una clase que implementa una interfaz cuya funcionalidad este cliente no usa, pero que otros clientes sí usan, <br>este cliente estará siendo afectado por los cambios que fuercen otros clientes en dicha interfaz.<br><br>

      Imaginemos que queremos definir las clases necesarias para albergar algunos tipos de aves. Por ejemplo, tendríamos loros, tucanes y halcones:</p>
    <img id="iga" src="\TuEnciclopedia\public\img\cs6.jpg" /><br><br><br>

  </section>
  <section>
    <h2>Principio de Inversiones de dependencias</h2>
    <p>Establece que las dependencias deben estar en las abstracciones, no en las concreciones. Es decir:</p>
    <ul>
      <li>Los módulos de alto nivel no deberían depender de módulos de bajo nivel. Ambos deberían depender de abstracciones.</li>
      <li> abstracciones no deberían depender de detalles. Los detalles deberían depender de abstracciones.</li>
    </ul><br>
    <p>
      En algún momento nuestro programa o aplicación llegará a estar formado por muchos módulos. Cuando esto pase, es cuando debemos<br>usar inyección de dependencias, lo que nos permitirá controlar las funcionalidades desde un sitio concreto en vez de tenerlas esparcidas por<br> todo el programa. Además, este aislamiento nos permitirá realizar testing mucho más fácilmente.<br><br>
      Supongamos que tenemos una clase para realizar el acceso a datos, y lo hacemos a través de una BBDD:</p>
    <img id="iga" src="\TuEnciclopedia\public\img\crs7.jpg" /><br><br><br>

    <p>
      Imaginemos que en el futuro queremos cambiar el servicio de BBDD por un servicio que conecta con una API. Para un minuto a pensar<br> qué habría que hacer... ¿Ves el problema? Tendríamos que ir modificando todas las instancias de la clase AccesoADatos, una por una.<br>

      Esto es debido a que nuestro módulo de alto nivel (AccesoADatos) depende de un módulo de más bajo nivel (DatabaseService), violando<br> así el principio de inversión de dependencias. El módulo de alto nivel debería depender de abstracciones.

      Para arreglar esto, podemos<br> hacer que el módulo AccesoADatos dependa de una abstracción más genérica:
    </p>
    <img id="iga" src="\TuEnciclopedia\public\img\crs9.jpg" /><br><br><br>

  </section>
</div>


<?php require URL_APP . '/app/views/layout/footer.php'; ?>