<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/tailwind.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <script src="./assets/js/index.js"></script>
    <title>NEXORA</title>
</head>

<body class="w-screen h-screen flex">
    <main class="bg-fundo flex w-full h-full">
        <div class="w-[40%] h-full p-10">
            <div class="w-2/5 h-8 flex gap-2 items-center">
                <img src="./assets/image/logo-nexora.png" class="h-8" alt="" srcset="">
                <h1 class="font-titulo  text-2xl text-detalhesCinza">NEXORA</h1>
            </div>
            <div class="w-full h-full flex justify-center items-center">
                <form action="/config/config.php" method="get" class="w-8/10 h-9/10 flex flex-col gap-6">
                    <div>
                        <h1 class="text-CinzaClaro text-5xl font-titulo">Bem Vindo</h1>
                        <p class="text-detalhesCinza font-titulo text-md">Prencha todos os campos abaixo:</p>
                    </div>
                    <div class="w-full flex gap-4">
                        <div class="w-1/2 h-15 flex flex-col mt-4">
                            <label for="" class="text-Roxo">*Nome:</label>
                            <input type="text" name="" id="nome" class="nome-Sobrenome" placeholder="Primeiro Nome">
                        </div>
                        <div class="w-1/2 h-15 flex flex-col mt-4">
                            <label for="" class="text-Roxo ">*Sobrenome:</label>
                            <input type="text" name="" id="sobrenome" class="nome-Sobrenome" placeholder="Sobrenome">
                        </div>
                    </div>
                    <div class=""> <label for="" class="text-Roxo">*Email:</label>
                        <input type="email" name="" id="email" class="caixa-texto" placeholder="E-mail">
                    </div>
                    <div>
                        <label for="" class="text-Roxo">*Senha:</label>
                        <div
                            class="w-full h-10 p.0.5  border-2 border-CinzaEscuro duration-200 hover:border-[#363636] flex">
                            <input type="password" name="senha" id="senha" onfocus="requisitos()" onblur="requisitos()"
                                class=" w-9/10 h-full pl-2 text-CinzaClaro placeholder:text-CinzaClaro focus:outline-none"
                                placeholder="Senha">
                            <div class="w-1/10 h-full flex justify-center items-center" onclick="revelarSenha()">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 text-Roxo icone hidden">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path fill-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 icone text-Roxo">
                                    <path
                                        d="M3.53 2.47a.75.75 0 0 0-1.06 1.06l18 18a.75.75 0 1 0 1.06-1.06l-18-18ZM22.676 12.553a11.249 11.249 0 0 1-2.631 4.31l-3.099-3.099a5.25 5.25 0 0 0-6.71-6.71L7.759 4.577a11.217 11.217 0 0 1 4.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113Z" />
                                    <path
                                        d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0 1 15.75 12ZM12.53 15.713l-4.243-4.244a3.75 3.75 0 0 0 4.244 4.243Z" />
                                    <path
                                        d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 0 0-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 0 1 6.75 12Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-3/5 h-3.5  mt-2 border-2 border-CinzaEscuro rounded-lg flex hidden
                            requisitos">
                            <div class="w-1/3 h-full border-r-2 border-CinzaEscuro"></div>
                            <div class="w-1/3 h-full border-r-2 border-CinzaEscuro"></div>
                            <div class="w-1/3 h-full border-r-2 border-CinzaEscuro"></div>
                        </div>
                    </div>
                    <div>
                        <label for="" class="text-Roxo">*Confirmar Senha:</label>
                        <div
                            class="w-full h-10 p.0.5  border-2 border-CinzaEscuro duration-200 hover:border-[#363636] flex">
                            <input type="password" name="Confirmsenha" id="Confirmsenha"
                                class=" w-9/10 h-full pl-2  text-CinzaClaro placeholder:text-CinzaClaro focus:outline-none"
                                placeholder="Confirmar Senha">
                            <div class="w-1/10 h-full flex justify-center items-center" onclick="revelarSenha()">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 text-Roxo icone hidden">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path fill-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 icone text-Roxo">
                                    <path
                                        d="M3.53 2.47a.75.75 0 0 0-1.06 1.06l18 18a.75.75 0 1 0 1.06-1.06l-18-18ZM22.676 12.553a11.249 11.249 0 0 1-2.631 4.31l-3.099-3.099a5.25 5.25 0 0 0-6.71-6.71L7.759 4.577a11.217 11.217 0 0 1 4.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113Z" />
                                    <path
                                        d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0 1 15.75 12ZM12.53 15.713l-4.243-4.244a3.75 3.75 0 0 0 4.244 4.243Z" />
                                    <path
                                        d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 0 0-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 0 1 6.75 12Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-4">
                        <a href="" class="w-1/2 h-10 bg-CinzaEscuro flex items-center gap-2 p-2">
                            <img src="./assets/image/googleLogo.png" alt="" class="h-6">
                            <p class="text-CinzaClaro font-bold">Entre com o Google</p>
                        </a>
                        <a href="" class="w-1/2 h-10 bg-CinzaEscuro flex items-center gap-2 p-2">
                            <img src="./assets/image/FacebookLogo.png" alt="" class="h-6">
                            <p class="text-CinzaClaro font-bold">Entre com o facebook</p>
                        </a>
                    </div>
                    <div>
                        <input type="submit"
                            class="w-full h-10 bg-Roxo font-bold duration-200 hover:cursor-pointer hover:bg-[#a44df5]"
                            value="CADASTRA-SE">
                        <div class="flex justify-center items-center w-full gap-0.5">
                            <p class="text-CinzaClaro">já tem conta? </p>
                            <a href="" class="text-Roxo underline decoration-solid">Login</a>
                        </div>
                    </div>


                </form>
            </div>
        </div>

        <div
            class="w-[60%] h-full flex justify-center items-center bg-gradient-to-b from-[#0f0f0f] via-[#111111] to-[##121212]">
            <div class="w-2/3 h-4/5 flex justify-center items-center">
                <img src="./assets/image/banner.png" class="h-full" alt="" srcset="">
            </div>
        </div>
    </main>
</body>

</html>