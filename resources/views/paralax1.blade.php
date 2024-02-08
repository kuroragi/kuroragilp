<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style1.css">
    <title>paralax scrolling web | Vanila javascript</title>
</head>

<body>
    <header>
        <a href="#" class="logo">Logo</a>
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#sec">About</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>
    <section>
        <img src="/images/paralax4.png" id="moon">
        <img src="/images/paralax2.png" id="mountain">
        <h2 id="moon-text">Kuroragi Studio</h2>
        <img src="/images/paralax3.png" id="bush">
    </section>
    <div id="sec">
        <h2>Parallax Scrolling Effects</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id dicta nesciunt mollitia laudantium! Odit cum
            cumque et quaerat distinctio voluptatum necessitatibus unde, temporibus officiis a qui illo nesciunt modi
            perferendis atque alias perspiciatis itaque, vel accusamus sit id reprehenderit voluptatem earum corporis.
            Iusto deserunt libero ullam quidem obcaecati quaerat provident quia veniam excepturi, rem qui debitis illum
            placeat quas maxime id ea dolorem nulla distinctio quos labore, ratione eos sequi? Esse, ad maxime a ullam
            dolorum repellendus quidem, harum rem sequi, sunt hic nobis et perferendis reprehenderit! Voluptas voluptate
            repellendus aliquid debitis, facere consequuntur quia. Quas omnis fugiat magnam tempora a rem officiis quasi
            cumque, laborum dolores. Maxime voluptatibus error inventore unde iure numquam rem, aperiam reprehenderit
            distinctio ratione delectus pariatur recusandae placeat deleniti sint natus vero debitis perspiciatis, velit
            fuga a ipsa necessitatibus earum nostrum? Praesentium eum ducimus hic sit dolorum suscipit! Sapiente
            voluptate totam officiis dolorem iste autem beatae aperiam cumque nam, omnis veniam illo dolore recusandae
            excepturi incidunt neque, eum, reprehenderit quidem libero? Voluptatibus perferendis reiciendis quo
            quibusdam!<br><br>
            Magnam in dolore vero alias quas, dolorum quod veritatis obcaecati quis omnis dolor perspiciatis
            doloribus facere aliquam maiores a fugiat. Accusantium mollitia iusto voluptates id praesentium libero nulla
            quisquam, voluptas quaerat at suscipit odit reiciendis iste sequi totam aliquid est debitis, dolore sapiente
            aut consequuntur perspiciatis ducimus, fuga corporis. Assumenda modi maxime natus, eos dolorum dignissimos?
            Velit ad amet nisi possimus dolorum asperiores, voluptatum expedita ratione similique ea nam soluta ducimus
            ut aliquam error, accusamus doloribus in repellendus reiciendis inventore praesentium, voluptatem a!
            Reprehenderit dolorem quia nisi quisquam architecto velit voluptatem debitis quibusdam eaque nobis magni
            beatae libero vitae tenetur aspernatur aliquid, dolore adipisci corrupti ullam officia aliquam, illum
            nesciunt. Tempore optio minima quas quod, nostrum veritatis ipsum doloribus aliquam, cum ad quia minus,
            nulla aut dolorem sunt asperiores dicta tempora dolores molestiae illum. Itaque possimus exercitationem,
            incidunt repellat quasi eos fugiat molestias facere autem at mollitia, sunt eum repellendus cumque, adipisci
            libero perferendis dolorum corporis deserunt nemo eveniet ullam repudiandae? Libero mollitia temporibus,
            officiis velit blanditiis magnam recusandae, earum, dolorum perspiciatis repudiandae animi fuga ut assumenda
            quos cupiditate tempore ab culpa soluta iste. Natus dolorum cupiditate soluta, autem deserunt porro commodi
            eligendi sapiente eveniet facere officia tempore at nihil optio, dolor voluptas excepturi animi corrupti
            debitis omnis sint libero facilis! Pariatur dolore cumque esse quis autem quaerat a delectus labore
            voluptate. Omnis asperiores error at, mollitia dicta inventore sequi minima non quod nesciunt totam corrupti
            nobis!<br><br>
            Voluptatem, animi. Quos nesciunt ducimus sunt maiores magnam omnis doloremque, exercitationem
            temporibus! Veniam deleniti voluptates et quasi iusto cumque dolor officiis praesentium nihil. Repellendus,
            numquam reprehenderit, incidunt aspernatur molestias animi unde explicabo laudantium cum repudiandae saepe
            quod illo odit obcaecati inventore facilis delectus praesentium suscipit ipsa facere minima ratione iure
            fuga? Similique voluptates pariatur odit, quis porro dolores facilis et provident fuga dignissimos, labore
            ipsam amet cupiditate, consequuntur placeat rerum veniam sint. Rem vel nobis, eaque quod amet accusamus! Eos
            nostrum cupiditate, ipsa, quod deserunt consequatur similique consectetur, velit itaque vel odio.</p>
    </div>

    <script>
        let moon = document.getElementById("moon");
        let moontext = document.getElementById("moon-text");
        let mountain = document.getElementById("mountain");
        let bush = document.getElementById("bush");

        window.addEventListener('scroll', function() {
            let value = window.scrollY;
            moon.style.top = value * 1.1 + "px";
            mountain.style.top = value * 0.5 + "px";
            bush.style.top = value * 0 + "px";
            moontext.style.marginRight = value * 4 + "px";
            moontext.style.marginTop = value * 1.5 + "px";
        });
    </script>
</body>

</html>
