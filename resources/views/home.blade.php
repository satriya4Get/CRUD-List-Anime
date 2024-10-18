@extends('layouts.app')

@section('content')
    <style>
        .container {
            max-width: 1200px;
        }

        .anime-card {
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .anime-card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            width: 100%;
            height: auto;
        }

        .card-body {
            background-color: #f9f9f9;
            padding: 15px;
            min-height: 100px;
            /* Set a minimum height for uniformity */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Ensure space is evenly distributed */
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 0.95rem;
            color: #333;
            overflow: hidden;
            /* Hide overflow text */
            max-height: 60px;
            /* Set a maximum height for short display */
            transition: max-height 0.3s ease;
            /* Smooth transition for expansion */
        }

        .card-text.expanded {
            max-height: 200px;
            /* Height when expanded */
        }

        .see-more {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
            margin-top: auto;
            text-decoration: none;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .card {
            transition: transform 0.2s;
            /* Adds a smooth scaling effect */
        }

        .card:hover {
            transform: scale(1.05);
            /* Slightly enlarges the card on hover */

        }

        .rating {
            font-size: 1.25rem;
            color: #ffc107;
            /* Yellow color for the stars */
            margin-bottom: 10px;
        }

        .rating span {
            margin-right: 5px;
        }
    </style>
<div class="container">
    <div class="row justify-content-center">
        @foreach ($anime as $item)
            <div class="col-md-4 mb-4">
                <div class="card anime-card">
                    <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text" id="description-{{ $item->id }}">{{ $item->description }}</p>
                        <span class="see-more" onclick="toggleDescription({{ $item->id }})">Selengkapnya</span>
                        <div class="rating">
                                    <span>&#x2605;</span> <!-- Yellow star -->
                            {{ $item->rating }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    <script>
        function toggleDescription(id) {
            const description = document.getElementById(`description-${id}`);
            description.classList.toggle('expanded');
            const isExpanded = description.classList.contains('expanded');
            description.nextElementSibling.innerText = isExpanded ? 'Tutup' : 'Selengkapnya';
        }
    </script>
@endsection
