@extends('admin.layout.app')

@section('title')
    Admin - {{ __('crud.admin.notifications.update') }}
@endsection

@section('heading')
    {{ __('crud.admin.notifications.update') }}
@endsection

@section('content')
    <div class="w-full rounded-lg shadow-xs bg-white dark:text-gray-400 dark:bg-gray-800 mb-5">
        <div class="w-full px-5 py-5">
            <x-form action="{{ route('admin.notification.update', $notification) }}" method="put" has-file>
                @include('admin.notification.form-inputs')
                
                <div class="flex justify-end">
                    <button type="submit" class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm" type="submit">{{ __('crud.general.update') }} {{ __('crud.admin.notifications.name') }}</button>
                </div>
            </x-form>
        </div>
    </div>
@endsection