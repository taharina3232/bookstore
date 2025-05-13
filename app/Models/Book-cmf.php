
<?php

return [

    'model' => App\Models\Book::class,

    'title' => 'Books',

    'single' => 'Book',

    'icon' => 'fa fa-book', // Font Awesome icon if used in admin

    'fields' => [
        'title' => [
            'label' => 'Title',
            'type' => 'text',
            'required' => true,
            'validation' => 'required|string|max:255',
        ],

        'author' => [
            'label' => 'Author',
            'type' => 'text',
            'required' => true,
            'validation' => 'required|string|max:255',
        ],

        'published_year' => [
            'label' => 'Published Year',
            'type' => 'number',
            'required' => true,
            'validation' => 'required|integer|min:1000|max:9999',
        ],
    ],

    'list' => [
        'columns' => ['id', 'title', 'author', 'published_year', 'created_at'],
        'sortable' => ['title', 'author', 'published_year'],
        'searchable' => ['title', 'author'],
    ],

    'permissions' => [
        'create' => true,
        'edit' => true,
        'delete' => true,
        'view' => true,
    ],

    // Optional hooks
    'events' => [
        'saving' => function ($model) {
            // Custom logic before saving
        },
        'saved' => function ($model) {
            // Logic after save
        },
    ],
];
