@php
    /** @var \App\Models\Category $categories */
@endphp
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Категорії</title>
</head>
<h1>Категорї новин:</h1>

<table>
    <tbody>
    @foreach ($categories as $category)
        <tr>
            <td>{{{ $category->name }}}</td>
            <td>
                @if(!empty($category->status))
                    {{ 'Категорія активна' }}
                @else
                    {{ 'Категорія вимкнена' }}
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
