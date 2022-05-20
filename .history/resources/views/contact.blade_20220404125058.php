@extends('layouts.app')

@section('title')
    Contact Page
@endsection

@section('content')

    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li class="alert alert-danger">
                    {{ $error }}hgjghjghj
                </li>
            @endforeach

        </ul>
    @endif

    

                <form action="{{ route('contact-submit') }}" method="POST">
                    @csrf
                    <div class="flex-rev">
                        <input type="text" placeholder="Connor Gaunt" name="name" id="name" />
                        <label for="name">Full Name</label>
                    </div>
                    <div class="flex-rev">
                        <input type="email" placeholder="connor@connorgaunt.com" name="email" id="email" />
                        <label for="email">Your Email</label>
                    </div>
                    <div class="flex-rev">
                        <textarea placeholder="I have an idea for a project...." name="message" id="message">
                        </textarea>
                        <label for="message">Email Message</label>
                    </div>
                    <button type="submit">Send Email</button>
                </form>
            </div>
        </div>
    </div>
@endsection
