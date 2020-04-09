<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
     integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
     integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
     integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style>
    body{
        /* background: #131313; */
    }

    .content-card{
        position: relative;
    }

    .content-card .cardBox{
        position: relative;
        width: 320px;
        height: 450px;
        background: #232323;
        border-radius: 20px;
        overflow: hidden;
        color: black;
    }

    .content-card .cardBox:before{
        content: '';
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background: #9bdc28;
        clip-path: circle(150px at 80% 20%);
        transition: 0.5s ease-in-out;
    }

    .content-card .cardBox:hover:before{
        clip-path: circle(300px at 80% -20%);
    }

    .content-card .cardBox:after{
        content: 'Nike';
        position: absolute;
        top: 30%;
        left: -20%;
        font-size: 12em;
        font-weight: 800;
        font-style: italic;
        color: rgb(255, 255, 255, 0.04)
    }

    .content-card .cardBox .imgBox{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10000;
        width: 100%;
        height: 220px;
        transition: 0.5s;
    }

    .content-card .cardBox:hover .imgBox{
        top: 0%;
        transform: translateY(0%);
    }

    .content-card .cardBox .imgBox img{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(25deg);
        width: 270px;
    }

    .content-card .cardBox .contentBx{
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100px;
        text-align: center;
        transition: 1s;
        z-index: 10;
    }

    .content-card .cardBox:hover .contentBx{
        height: 210px;
    }

    .content-card .cardBox .contentBx h2{
        position: relative;
        font-weight: 600;
        letter-spacing: 1px;
        color: #fff;
    }

    .content-card .cardBox .contentBx .size,
    .content-card .cardBox .contentBx .color{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 8px 20px;
        transition: 0.5s;

    }

    .content-card .cardBox .contentBx .size h3,
    .content-card .cardBox .contentBx .color h3{
        color: #fff;
        font-weight: 300;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-right: 10px;
    }

    .content-card .cardBox .contentBx .size span{
        width: 26px;
        height: 26px;
        text-align: center;
        line-height: 26px;
        font-size: 14px;
        display:inline-block;
        color: #111;
        background: #fff;
        margin: 0 5px;
        transition: 0.5s;
        color: #111;
        border-radius: 6px;
        cursor: pointer;

    }

    .content-card .cardBox .contentBx .size span:hover{
        background: #9bdc28
    }

    .content-card .cardBox .contentBx .color span{
        width: 20px;
        height: 20px;
        background: #ff0;
        border-radius: 50%;
        margin: 0 5px;
        cursor: pointer;
    }

    .content-card .cardBox .contentBx .color span:nth-child(2){
        background: #9bdc28;
    }
    .content-card .cardBox .contentBx .color span:nth-child(3){
        background: #03a9f4;
    }
    .content-card .cardBox .contentBx .color span:nth-child(4){
        background: #e91e63;
    }

    .content-card .cardBox .contentBx a{
        display: inline-block;
        padding: 10px 20px;
        background: #fff;
        border-radius: 4px;
        margin-top: 10px;
        text-decoration: none;
        font-weight: 600;
        color: #111;
        opacity: 0;
        transform: translateY(50px);
        transition: 0.5s;
    }

    .content-card .cardBox:hover .contentBx a{
        opacity: 1;
        transform: translateY(0px);
        transition-delay: 0.75s;
    }


</style>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">Hype</a>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categorias
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Tenis</a>
                  <a class="dropdown-item" href="#">Casaco</a>
                  <a class="dropdown-item" href="#">Calca</a>
                </div>
              </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="content-card mt-5">
                    <div class="cardBox">
                        <div class="imgBox">
                            <img src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5816.png" width="210px">
                        </div>
                        <div class="contentBx">
                            <h2>nike Shoes</h2>
                            <div class="size">
                                <h3>Size:</h3>
                                <span>39</span>
                                <span>40</span>
                                <span>41</span>
                            </div>
                            <div class="color">
                                <h3>Color: </h3>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a   href="#">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-card mt-5">
                    <div class="cardBox">
                        <div class="imgBox">
                            <img src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5816.png" width="210px">
                        </div>
                        <div class="contentBx">
                            <h2>nike Shoes</h2>
                            <div class="size">
                                <h3>Size:</h3>
                                <span>39</span>
                                <span>40</span>
                                <span>41</span>
                            </div>
                            <div class="color">
                                <h3>Color: </h3>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a   href="#">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-card mt-5">
                    <div class="cardBox">
                        <div class="imgBox">
                            <img src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5816.png" width="210px">
                        </div>
                        <div class="contentBx">
                            <h2>nike Shoes</h2>
                            <div class="size">
                                <h3>Size:</h3>
                                <span>39</span>
                                <span>40</span>
                                <span>41</span>
                            </div>
                            <div class="color">
                                <h3>Color: </h3>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a   href="#">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
