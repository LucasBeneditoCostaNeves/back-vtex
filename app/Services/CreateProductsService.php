<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Products;
use App\Models\User;



class CreateProductsService
{
    public function create()
    {
        $products = [
            [
                "id" => 41,
                "name" => "Batata Frita Lisa 80G",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/776/23685776.jpg",
                "price" => 10.99,
                "description" => "",
                "category" => "Alimenticio",
                "created_at" => "2023-06-05T21:17:19.839Z"
            ],
            [
                "id" => 42,
                "name" => "Palitinho De Trigo 120G",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/864/23685864.jpg",
                "price" => 7.99,
                "description" => "",
                "category" => "Alimenticio",
                "created_at" => "2023-06-05T21:17:46.942Z"
            ],
            [
                "id" => 40,
                "name" => "Salgadinho de Milho 140g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/249/23682249.jpg",
                "price" => 8.99,
                "description" => "",
                "category" => "Alimenticio",
                "created_at" => "2023-06-05T21:16:19.595Z"
            ],
            [
                "id" => 43,
                "name" => "Achocolatado NESCAU 370g",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/879/24710879.jpg",
                "price" => 18.99,
                "description" => "",
                "category" => "Alimenticio",
                "created_at" => "2023-06-05T21:18:12.556Z"
            ],
            [
                "id" => 8,
                "name" => "Refrigerante Zero 200ml",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/231/13494231.jpeg?im=Resize,width=200",
                "price" => 4.99,
                "description" => "",
                "category" => "Bebidas",
                "created_at" => "2023-06-05T20:45:25.132Z"
            ],
            [
                "id" => 10,
                "name" => "Refrigerante Cola Zero 1,5l",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/969/25091969.png",
                "price" => 4.99,
                "description" => "",
                "category" => "Bebidas",
                "created_at" => "2023-06-05T20:46:48.765Z"
            ],
            [
                "id" => 9,
                "name" => "Refrigerante PEPSI Zero 2L",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/248/12906248.jpg",
                "price" => 6.99,
                "description" => "",
                "category" => "Bebidas",
                "created_at" => "2023-06-05T20:46:08.721Z"
            ],
            [
                "id" => 21,
                "name" => "Refrigerante ITUBAÍNA 355ml",
                "image" => "https://static.clubeextra.com.br/img/uploads/1/860/20900860.png",
                "price" => 6.89,
                "description" => "",
                "category" => "Bebidas",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 22,
                "name" => "Parafusadeira Furadeira Titanium",
                "image" => "https://imgs.extra.com.br/1559476447/1xg.jpg?imwidth=64",
                "price" => 139.64,
                "description" => "",
                "category" => "Ferramentas",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 23,
                "name" => "Plaina Philco Force PPL01",
                "image" => "https://imgs.extra.com.br/55012053/1xg.jpg?imwidth=292",
                "price" => 284.99,
                "description" => "",
                "category" => "Ferramentas",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 24,
                "name" => "Kit de Ferramentas WAP",
                "image" => "https://imgs.extra.com.br/55054264/1g.jpg?imwidth=64",
                "price" => 73.90,
                "description" => "",
                "category" => "Ferramentas",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 25,
                "name" => "Lavadora de Alta Pressão",
                "image" => "https://imgs.extra.com.br/11817431/1xg.jpg?imwidth=64",
                "price" => 469.30,
                "description" => "",
                "category" => "Ferramentas",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 26,
                "name" => "Smart TV LED 32 HD",
                "image" => "https://imgs.extra.com.br/55006486/1xg.jpg?imwidth=64",
                "price" => 1096.47,
                "description" => "",
                "category" => "Tecnologia",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 27,
                "name" => "Smart TV 43 AOC Full HD",
                "image" => "https://imgs.extra.com.br/55057713/1g.jpg?imwidth=64",
                "price" => 1394.70,
                "description" => "",
                "category" => "Tecnologia",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 28,
                "name" => "Smart TV 32 LG HD",
                "image" => "https://imgs.extra.com.br/55051818/1g.jpg?imwidth=64",
                "price" => 1161.57,
                "description" => "",
                "category" => "Tecnologia",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 29,
                "name" => "Samsung Smart TV QLED",
                "image" => "https://imgs.extra.com.br/1556710663/1xg.jpg?imwidth=64",
                "price" => 5599.00,
                "description" => "",
                "category" => "Tecnologia",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 30,
                "name" => "Camiseta Masculina Lisa",
                "image" => "https://imgs.extra.com.br/1540581711/1xg.jpg?imwidth=64",
                "price" => 16.90,
                "description" => "",
                "category" => "Moda",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 31,
                "name" => "Camiseta Masculina Lisa",
                "image" => "https://imgs.extra.com.br/1540582859/1xg.jpg?imwidth=64",
                "price" => 16.90,
                "description" => "",
                "category" => "Moda",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 32,
                "name" => "Kit 12 Pares de Meias",
                "image" => "https://imgs.extra.com.br/1505671952/1xg.jpg?imwidth=64",
                "price" => 31.90,
                "description" => "",
                "category" => "Moda",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 33,
                "name" => "Kit 10 Cuecas Boxer",
                "image" => "https://imgs.extra.com.br/1505393333/1xg.jpg?imwidth=64",
                "price" => 47.99,
                "description" => "",
                "category" => "Moda",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 34,
                "name" => "Bicicleta Ergométrica Spinning",
                "image" => "https://imgs.extra.com.br/55057346/1g.jpg?imwidth=64",
                "price" => 1699.00,
                "description" => "",
                "category" => "Esportes",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 35,
                "name" => "Bicicleta Spinning com roda",
                "image" => "https://imgs.extra.com.br/1508694684/1xg.jpg?imwidth=64",
                "price" => 1480.00,
                "description" => "",
                "category" => "Esportes",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 36,
                "name" => "Esteira Eletrônica Dream Black",
                "image" => "https://imgs.extra.com.br/55014213/1xg.jpg?imwidth=64",
                "price" => 3109.00,
                "description" => "",
                "category" => "Esportes",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],[
                "id" => 37,
                "name" => "Bicicleta Spinning Ergométrica",
                "image" => "https://imgs.extra.com.br/1547197996/1xg.jpg?imwidth=64",
                "price" => 2999.00,
                "description" => "",
                "category" => "Esportes",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 38,
                "name" => "Intima - 60 Caps Cada Kit",
                "image" => "https://imgs.extra.com.br/1544645752/1xg.jpg?imwidth=64",
                "price" => 53.30,
                "description" => "",
                "category" => "Saúde",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 39,
                "name" => "Amora, Agoniada, Saúde",
                "image" => "https://imgs.extra.com.br/1556353554/1xg.jpg?imwidth=64",
                "price" => 25.47,
                "description" => "",
                "category" => "Saúde",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
            [
                "id" => 51,
                "name" => "Auxiliar De Saúde",
                "image" => "https://imgs.extra.com.br/1554992954/1xg.jpg?imwidth=64",
                "price" => 51.12,
                "description" => "Saúde",
                "category" => "",
                "created_at" => "2023-06-05T20:54:45.819Z"
            ],
        ];

        for ($i = 0; $i <= count($products); $i++) {
            $name = $products[$i]['name'];

            $verify = Products::where('name', $name)->first();

            if (!$verify) {
                Products::create($products[$i]);
            }
        }
        return "funcionou";
    }
}
