
# KirvesLaravel

Repository to show my skills using Laravel and PHP. I'm following a "roadmap" to fill my knowledge and get a "back-end" title.


## KirvesRoadmap

- ProductAPI - The tool can list, receive, insert and update products.


## Run locally

Clone o projeto

```bash
  git clone https://github.com/thmachado/KirvesLaravel
```

Enter directory

```bash
  cd KirvesLaravel
```

Install dependencies

```bash
  composer install
```

Config .env

```bash
  Edit "DB_" to connect tool at dabatase.
```

Run migration

```bash
  php artisan migrate
```

Start server

```bash
  php artisan serve
```


## API documentation

#### Get the token

```http
  GET /product/token
```

#### List the products

```http
  GET /product
```

#### Insert a product

```http
  POST /product
```

| Parâmetro   | Tipo       | Descrição                           |
| :---------- | :--------- | :---------------------------------- |
| `X-CSRF-TOKEN` | `string` | **Required**. Token |
| `title` | `string` | **Required**. Product title |
| `type` | `string` | **Required**. Product type |
| `quantity` | `int` | **Required**. Quantity |
| `price` | `int` | **Required**. Price |


#### Update a product

```http
  PUT /product/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. ProductID |
| `X-CSRF-TOKEN` | `string` | **Required**. Token |
| `title` | `string` | **Required**. Product title |
| `type` | `string` | **Required**. Product type |
| `quantity` | `int` | **Required**. Quantity |
| `price` | `int` | **Required**. Price |

## Autores

- [@thmachado](https://www.github.com/thmachado)

