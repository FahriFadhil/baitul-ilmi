@extends('layouts.app')


<main id="detail-news">
    <div class="detail">
        <div class="title">
            <h1>{{ $news->headline }}</h1>
            <p>{{ \Carbon\Carbon::parse($news->created_at)->format('M d, Y') }}</p>
            <p>{{ $news->author }}</p>
            <img src="{{ asset('storage/images') }}/{{ $news->image }}" alt="">
        </div>
        <div class="content">
            <p>{{ $news->description }}
            </p>
        </div>
    </div>
