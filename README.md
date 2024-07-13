# Password confirmation modal example

This project is used as an example to show how I built a Blade component that can ask the user to confirm their password before doing a specific action. This requires almost no javascript code and it wouldn't be possible without the power and magic that Alpine and Livewire together provides!


## Installation
You will need PHP 8.3
```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
npm i && npm run build
php artisan serve
```

Now, if you can visit localhost:8000 and try it out. Log in with `test@example.com / password` and try both buttons.
## Usage

```html
<x-action-button
    :confirm="true"
    action="/protected"
    method="POST"
    class="btn btn-primary"
>
    Perform protected action!
</x-action-button>
```

If you omit the `confirm` property, the button will just submit the form without password confirmation which can be useful in other parts of your app (ex: Button to delete a resource using a `DELETE` request)
```html
<x-action-button
    action="/posts/1"
    method="DELETE"
    class="btn btn-primary"
>
    Delete post
</x-action-button>
```
