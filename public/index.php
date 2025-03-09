<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/tailwind.css">
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
                            <input type="text" name="" id=""
                                class="w-full h-full border-2 border-CinzaEscuro focus:outline-none p-2 text-CinzaClaro placeholder-detalhesCinza"
                                placeholder="Primeiro Nome">
                        </div>
                        <div class="w-1/2 h-15 flex flex-col mt-4">
                            <label for="" class="text-Roxo ">*Sobrenome:</label>
                            <input type="text" name="" id=""
                                class="w-full h-full border-2 border-CinzaEscuro focus:outline-none p-2 text-CinzaClaro placeholder-detalhesCinza"
                                placeholder="Sobrenome">
                        </div>
                    </div>
                    <div class=""> <label for="" class="text-Roxo">*Email:</label>
                        <input type="email" name="" id=""
                            class="w-full h-10 border-2 border-CinzaEscuro focus:outline-none p-2 text-CinzaClaro placeholder-detalhesCinza"
                            placeholder="E-mail">
                    </div>
                    <div>
                        <label for="" class="text-Roxo">*Senha:</label>
                        <input type="password" name="" id=""
                            class="w-full h-10 border-2 border-CinzaEscuro focus:outline-none p-2 text-CinzaClaro placeholder-detalhesCinza"
                            placeholder="Senha">
                    </div>
                    <div>
                        <label for="" class="text-Roxo">*Confirmar Senha:</label>
                        <input type="password" name="" id=""
                            class="w-full h-10 border-2 border-CinzaEscuro focus:outline-none p-2 text-CinzaClaro placeholder-detalhesCinza"
                            placeholder="Confirmar Senha">
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
                        <input type="submit" class="w-full h-10 bg-Roxo font-bold" value="CADASTRA-SE">
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