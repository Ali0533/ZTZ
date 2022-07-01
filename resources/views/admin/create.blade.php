@extends('welcome')

@section('content')
    <div class="container">
        <form action="" method="POST" class="formLogin">
            @csrf
            <h3>Добавить товар</h3>
            @if(session()->has('success'))
                <div class="alert-success">Товар успешно добавлен</div>
            @endif
            <div class="form-field">
                <label for="name" class="form-label">Наименование товара:</label>
                <input type="text" class="form-input @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="failValidation">
                @error('name')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="length" class="form-label">Длина:</label>
                <input type="number" class="form-input @error('length') is-invalid @enderror" name="length" id="length" aria-describedby="failValidation">
                @error('length')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="diameter" class="form-label">Наружный диаметр:</label>
                <input type="number" class="form-input @error('diameter') is-invalid @enderror" name="diameter" id="diameter" aria-describedby="failValidation">
                @error('diameter')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="thickness" class="form-label">Толщина стенки:</label>
                <input type="number" class="form-input @error('thickness') is-invalid @enderror" name="thickness" id="thickness" aria-describedby="failValidation">
                @error('thickness')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="class" class="form-label">Класс прочности</label>
                <input type="text" class="form-input @error('class') is-invalid @enderror" name="class" id="class" aria-describedby="failValidation">
                @error('class')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="mark" class="form-label">Марка стали:</label>
                <input type="text" class="form-input @error('mark') is-invalid @enderror" name="mark" id="mark" aria-describedby="failValidation">
                @error('mark')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="price" class="form-label">Стоимость за штуку:</label>
                <input type="number" class="form-input @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="failValidation">
                @error('price')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="stock" class="form-label">Отстаток на складе:</label>
                <input type="number" class="form-input @error('stock') is-invalid @enderror" name="stock" id="stock" aria-describedby="failValidation">
                @error('stock')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" class="createBtn" value="Добавить">
        </form>
    </div>

@endsection
