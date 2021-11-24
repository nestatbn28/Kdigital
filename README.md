pertama yang kita lakukan adalah membuat create database dengan nama kdigital menggunakan query dibawah ini di sqlyog
|`create database kdigital`|

kedua kita migrate database menggunakan cmd di folder kdigital tersebut menggunakan perintah seperti dibawah ini di cmd
|`php artisan migrate`|

ketiga kita run laravel tersebut dengan perintah seperti ini yang kita gunakan di cmd
|`php artisan serve`|


GET http://127.0.0.1:8000/api/list

## Responses

List returns a JSON response in the following format:

```javascript
{
    "success": true,
    "message": "List Tiket",
    "result": [
        {
            "id": "72ba8204-8155-4d99-a072-c4c4d7c7b561",
            "number": 1,
            "subject": "Tiket 1",
            "message": "VVIP",
            "status": "open",
            "priority": "high"
        }
    ]
}
```


POST http://127.0.0.1:8000/api/store

| Parameter | Type | 
| :--- | :--- | 
| `subject` | `string` |
| `message` | `mediumtext` |
| `status` | `enum` |
| `priority` | `enum` |

## Responses
```javascript
{
    "success": true,
    "message": "Tiket berhasil ditambahkan."
}
```


POST http://127.0.0.1:8000/api/hapus/{id}

## Responses
```javascript
{
    "success": true,
    "message": "Tiket berhasil Dihapus."
}
```

