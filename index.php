<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#">Edmara</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE MIM</a></li>
                    <li><a href="#skills" onclick="seleccionar()">SKILLS</a></li>
                    <li><a href="#curriculum" onclick="seleccionar()">CURRÍCULO</a></li>
                    <li><a href="#portfolio" onclick="seleccionar()">PORTFOLIO</a></li>
                    
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="img/eu.jpeg" alt="">
            </div>
            <h1>EDMARA CARVALHO</h1>
            <h2>DESENVOLVEDOR JR</h2>
            <div class="redes">
                <a href="https://www.linkedin.com/in/edmara-carvalho-3321b015b/  "><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://github.com/edgcarvalho"><i class="fa-brands fa-github"></i>
                <a href="edmaradgcarvalho@hotmail.com  "><i class="fa-solid fa-envelope"></i>
            </div>
        </div>
    </section>

    <!-- SECCION SOBRE MI -->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Mim</h2>
            <p><span>Oie, sou Edmara Carvalho.</span> Tenho 23 anos, sou graduada em Logística pela Fatec de Guaratinguetá. Porém durante o período de isolamento, buscando algo para servir de hobbie e ocupar a cabeça comecei a fazer alguns cursos de programaçãoe foi ali que desenvolvi interesse pela área. No ínicio de 2022 ingressei no curso de Desenvlvimento de Sistemas e agora estou a procura de uma oportunidade de ingressar no mercado.</p>

            <div class="fila">
                <!-- datos personales -->
                <div class="col">
                    <h3>Dados Pessoais</h3>
                    <ul>
                        <li>
                            <strong>Aniversário</strong>
                            05-07-1999
                        </li>
                        <li>
                            <strong>Telefone</strong>
                            (12) 982957928
                        </li>
                        <li>
                            <strong>Email</strong>
                            edmaradgcarvalho@hotmail.com
                        </li>
                    
                        <li>
                            <strong>Natural de:</strong>
                            Aparecida - SP
                        </li>
                        <li>
                            <strong>Cargo</strong>
                            <span>Dev jr.</span>
                        </li>
                    </ul>
                </div>

                <!-- intereses -->
                <div class="col">
                    <h3>Interesses</h3>
                    <div class="contenedor-intereses">
                        <div class="interes">
                            <i class="fa-solid fa-gamepad"></i>
                            <span>JOGOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-headphones"></i>
                            <span>MÚSICA</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-plane"></i>
                            <span>VIAJAR</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-broom-ball"></i>
                            <span>POTTERHEAD</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-film"></i>
                            <span>FILMES </span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-film"></i>
                            <span>SÉRIES</span>
                        </div>
                        <div class="interes">
                            <i class="fa-sharp fa-solid fa-glasses"></i>
                            <span>GEEKIE</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-cat"></i>
                            <span>GATOS</span>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- SECCION SKILLS -->
    <section class="skills" id="skills">
        <div class="contenido-seccion">
            <h2>Skills</h2>
            <div class="fila">
                <!-- Technical Skill -->
                <div class="col">
                    <h3>Linguagens</h3>
                    <div class="skill">
                        <span>Javascript</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>30%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>HTML & CSS</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Photoshop</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>10%</span>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="skill">
                        <span>PHP</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>40%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Professional Skills -->
                <div class="col">
                    <h3>Soft Skills</h3>
                    <div class="skill">
                        <span>Comunicação</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Trabalho em Equipe</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Criatividade</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>99%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Dedicação</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>65%</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION CURRICULUM -->
    <section id="curriculum" class="curriculum">
        <div class="contenido-seccion">
            <h2>Currículo</h2>
            <div class="fila">
                <div class="col izquierda">
                    <h3>Formação</h3>
                    <div class="item izq">
                        <h4>Desenvolvimento de Sistemas</h4>
                        <span class="casa">ETEC Prof Alfredo de Barros Santos</span>
                        <span class="fecha">Cursando</span>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Gestão em Logística</h4>
                        <span class="casa">Fatec Guaratinguetá</span>
                        <span class="fecha">2019 - 2021</span>
                        <p>Artigo "Entrega por meio de drones nos dias atuais"- FatecLog 2021 <br>
                            TCC -  Exportação de suco em pó para a China
                        </p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Administração</h4>
                        <span class="casa">ETEC Prof Alfredo de Barros Santos</span>
                        <span class="fecha">2017 - 2018</span>
                        <p>TCC- Plano de negócios de um triturador orgânico</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                </div>

                <div class="col derecha">
                    <h3>Experiencia de trabalho</h3>
                    <div class="item der">
                        <h4>Auxiliar Administrativo</h4>
                        <span class="casa">Hollywood Embalagens</span>
                        <span class="fecha">Mai/22 - Set/22</span>
                        <p>Cobri a licença maternidade de uma funcionária e nesse meio tempo desenvolvi rotinas administrativas em geral, emissão de NF's, serviços de RH, etc...</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Estágio em Logística</h4>
                        <span class="casa">Prefeitura de Aparecida</span>
                        <span class="fecha">Set/2019 - Set/2021</span>
                        <p>Organização da frota municipal, emissão de multas e recursos cartão de idoso e serviços direcionados ao trânsito da cidade</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Aprendiz em Logística</h4>
                        <span class="casa">Editora Santuário</span>
                        <span class="fecha">Jul/18 - Jun/19</span>
                        <p>Expedição de períodicos e CRM</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Aprendiz em Administração</h4>
                        <span class="casa">Prefeitura de Aparecida</span>
                        <span class="fecha">Mar/15 - Mar/17</span>
                        <p>Funções diversas na Creche Vera Lucia</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION PORTFOLIO -->
    <section id="portfolio" class="portfolio">
        <div class="contenido-seccion">
            <h2>PORTFOLIO</h2>
            <div class="galeria">
                <div class="proyecto">
                    <img src="img/breve.jpg" alt="">
                    <div class="overlay">
                        <h3>Estudo</h3>
                        <p>Em breve</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/breve.jpg" alt="">
                    <div class="overlay">
                        <h3>Estudo</h3>
                        <p>Em breve</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/breve.jpg" alt="">
                    <div class="overlay">
                        <h3>Estudo</h3>
                        <p>Em breve</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/breve.jpg" alt="">
                    <div class="overlay">
                        <h3>Estudo</h3>
                        <p>Em breve</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/breve.jpg" alt="">
                    <div class="overlay">
                        <h3>Estudo</h3>
                        <p>Em breve</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/breve.jpg" alt="">
                    <div class="overlay">
                        <h3>Estudo</h3>
                        <p>Em breve</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION CONTACTO -->
    

    <!-- footer -->
    <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
            <a href="edmaradgcarvalho@hotmail.com  "><i class="fa-solid fa-envelope"></i></a>
            <a href="https://www.linkedin.com/in/edmara-carvalho-3321b015b/  "><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://github.com/edgcarvalho"><i class="fa-brands fa-github"></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>