@extends('partials.layout')
@section('title', 'View Post')
@section('content')
    <div class="container mx-auto">
        <form>
            <label class="form-control w-full">
                <div class="badge badge-accent">
                    Title
                </div>
                <div class="label">
                    <span class="table is-striped is-fullwidth">{{ $post->title }}</span>
                </div>
            </label>
            <label class="form-control w-full">
                <div class="badge badge-accent">
                    Content
                </div>
                <div class="label">
                    <span class="table is-striped is-fullwidth">{{ $post->body }}</span>
                </div>
            </label>
            <label class="form-control w-full">
                <div class="badge badge-accent">
                    Created
                </div>
                <div class="label">
                    <span class="table is-striped is-fullwidth">{{ $post->created_at }}</span>
                </div>
            </label>
        </form>
    </div>
@endsection
