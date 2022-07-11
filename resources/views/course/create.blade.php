@extends('layouts.web')


@section('content')
    <div>

        <x-jet-authentication-card>
            <x-slot name="logo">
              
            </x-slot>
    
            <x-jet-validation-errors class="mb-4" />
    
            <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                @csrf
    
                <div>
                    <x-jet-label for="title" value="{{ __('Title') }}" />
                    <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title"  required autofocus autocomplete="title" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="category" value="{{ __('Category') }}" />
                    <select name="category" id="" class="block mt-1 w-full">
                        <option value="1">Tec</option>
                        <option value="2">marketing</option>
                    </select>
                   
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="description" value="{{ __('Description') }}" />
                    <textarea name="description" id="description" class="block mt-1 w-full"></textarea>
                    
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="image" value="{{ __('Image') }}" />
                    <x-jet-input id="image" class="block mt-2 w-full" type="file" name="image" required  />
                </div>
    
               
    
                <div class="flex items-center justify-end mt-4">
                    
    
                    <x-jet-button >
                        {{ __('Save') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>

    </div>

 
@endsection