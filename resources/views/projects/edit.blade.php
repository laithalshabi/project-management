@extends('Layouts.app')
@section('title', 'تعديل مشروع ')

@section('content')
    <div class="row justify-content-center text-right">
        <div class="col-8">
            <div class="card p-5">

                <h3 class="text-center pb-5 font-weight-bold">
                    تعديل مشروع
                </h3>
                <form action="/projects/{{ $project->id }}" method="POST" dir="rtl">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="title">عنوان المشروع</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $project->title ?? '' }}">

                        @error('title')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">وصف المشروع</label>
                        <textarea class="form-control" id="description"
                            name="description">{{ $project->description ?? '' }}</textarea>

                        @error('description')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-group d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                        <a href="/projects" class="btn btn-light">الغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
