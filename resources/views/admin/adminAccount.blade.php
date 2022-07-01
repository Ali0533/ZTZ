@extends('welcome')

@section('content')
    <div class="container">
        <h2>Личный кабинет админа</h2>
        <div class="productHead">
            <h3>Все товары</h3>
            <a href="create" class="createBtnLink">Добавить товар</a>
        </div>


            <table>
                <tr>
                    <th>Наименование</th>
                    <th>Длина</th>
                    <th>Наружный диаметр</th>
                    <th>Толщина стенки</th>
                    <th>Класс прочности</th>
                    <th>Марка стали</th>
                    <th>Стоимость/шт</th>
                    <th>Остаток на складе</th>
                    <th>Действие</th>
                </tr>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->length }}</td>
                        <td>{{ $product->diameter }}</td>
                        <td>{{ $product->thickness }}</td>
                        <td>{{ $product->class }}</td>
                        <td>{{ $product->mark }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <form action="{{ route('product.edit', ['product' => $product->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="tableDestroy">
                                    <img src="../resources/media/img/pen.png" alt="" class="tableIcon">
                                </button>
                            </form>
                            <form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="tableDestroy">
                                    <img src="../resources/media/img/trash.png" alt="" class="tableIcon">
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    Товаров нет!
                @endforelse
            </table>

    </div>

@endsection
