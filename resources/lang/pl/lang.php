<?php

return [
    '404'      => 'Strony nie znaleziono.',
    'auth'     => [
        'title'          => 'Autoryzacja',
        'username'       => 'Nazwa użytkownika',
        'password'       => 'Hasło',
        'login'          => 'Zaloguj się',
        'logout'         => 'Wyloguj się',
        'wrong-username' => 'Niepoprawna nazwa użytkownika',
        'wrong-password' => 'lub hasło',
    ],
    'ckeditor' => [
        'upload'        => [
            'success' => 'Plik został załadowany: \\n- Rozmiar: :size kb \\n- szerokość/wysokość: :width x :height',
            'error'   => [
                'common'              => 'Wystąpił problem podczas ładowania pliku.',
                'wrong_extension'     => 'Plik ":file" ma złe rozszerzenie.',
                'filesize_limit'      => 'Maksymalny rozmiar pliku to :size kb.',
                'imagesize_max_limit' => 'Szerokość x Wysokość = :width x :height \\n Maksymalna Szerokość x Wysokość: :maxwidth x :maxheight',
                'imagesize_min_limit' => 'Szerokość x Wysokość = :width x :height \\n Minimalna Szerokość x Wysokość: :minwidth x :minheight',
            ],
        ],
        'image_browser' => [
            'title'    => 'Dodaj plik z serwera',
            'subtitle' => 'Wybierz plik',
        ],
    ],
    'table'    => [
        'new-entry'       => 'Nowy rekord',
        'edit'            => 'Edycja',
        'restore'         => 'Przywróć',
        'delete'          => 'Usuń',
        'delete-confirm'  => 'Jesteś pewny, że chcesz usunąć ten rekord?',
        'delete-error'    => 'Błąd podczas kasowania rekordu. Musisz najpierw usunąć zależne rekordy.',
        'moveUp'          => 'Do góry',
        'moveDown'        => 'W dół',
        'error'           => 'There was an error during your request',
        'filter'          => 'Pokaż podobne rekordy',
        'filter-goto'     => 'Pokaż',
        'save'            => 'Zapisz',
        'save_and_close'  => 'Zapisz i zamknij',
        'save_and_create' => 'Zapisz i utwórz',
        'cancel'          => 'Anuluj',
        'download'        => 'Pobierz',
        'all'             => 'Wszystkie',
        'processing'      => '<i class="fa fa-5x fa-circle-o-notch fa-spin"></i>',
        'loadingRecords'  => 'Ładowanie...',
        'lengthMenu'      => 'Pokaż _MENU_ wpisy',
        'zeroRecords'     => 'Nie znaleziono rekordów.',
        'info'            => 'Wyświetlono od _START_ do _END_ z _TOTAL_ rekordów',
        'infoEmpty'       => 'Wyświetlono od 0 do 0 z 0 rekordów',
        'infoFiltered'    => '(zawężono z _MAX_ rekordów)',
        'infoThousands'   => ',',
        'infoPostFix'     => '',
        'search'          => 'Szukaj: ',
        'emptyTable'      => 'Brak dostępnych danych dla tabeli.',
        'paginate'        => [
            'first'    => 'Pierwszy',
            'previous' => '&larr;',
            'next'     => '&rarr;',
            'last'     => 'Ostatni',
        ],
    ],
    'editable' => [
        'checkbox' => [
            'checked'   => 'Tak',
            'unchecked' => 'Nie',
        ],
    ],
    'select'   => [
        'nothing'     => 'Nie wybrano',
        'selected'    => 'Wybrano',
        'placeholder' => 'Wybierz z listy',
    ],
    'image'    => [
        'browse'         => 'Wybierz obrazek',
        'browseMultiple' => 'Wybierz obrazki',
        'remove'         => 'Usuń obrazek',
        'removeMultiple' => 'Usuń',
    ],
    'file'     => [
        'browse' => 'Wybierz plik',
        'remove' => 'Usuń plik',
    ],
    'message'  => [
        'created'  => '<i class="fa fa-check fa-lg"></i> Utworzono rekord',
        'updated'  => '<i class="fa fa-check fa-lg"></i> Rekord zaktualizowany',
        'deleted'  => '<i class="fa fa-check fa-lg"></i> Rekord usunięty',
        'restored' => '<i class="fa fa-check fa-lg"></i> Przywrócono rekord',
    ],
];
