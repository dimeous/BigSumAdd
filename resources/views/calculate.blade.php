@extends('layout')
@section('content')
                <div class="title m-b-md">
                    Сложение больших чисел
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form  method="post" action="{{ route('calculate') }}" >
                        <div class="form-group">
                            @csrf
                            <label for="sum1">Число 1</label>
                            <input name="num1" type="text" class="form-control" id="sum1"  placeholder="Целое число до 255 символов">
                        </div>
                        <div class="form-group">
                            <label for="sum2">Число 2</label>
                            <input name="num2" type="text" class="form-control" id="sum2"  placeholder="Целое число до 255 символов">
                        </div>

                        <div class="form-group">
                            <label for="res">Сумма:</label>
                            <span class="form-control" id="res" style="word-break: break-all">   {{ $result ?? '-' }}</span>
                        </div>
                        <button  type="submit" class="btn btn-primary" >Расчитать</button>
                    </form>
                </div>
@endsection
