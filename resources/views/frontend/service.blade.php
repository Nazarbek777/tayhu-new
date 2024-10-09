@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Page Section Start -->
<div class="tp-product-details-area tp-product-style-2 pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-product-top pb-15">
                            <div class="row align-items-center" style="display:flex; justify-content: space-between;">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <div class="tp-product__text">
                                        <span>Showing 1–10 of <i>{{ count($products) }}</i> results</span>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30 text-right">
                                    <form id="filterForm" action="{{ route('service') }}" method="GET">
                                        <div class="dropdown">
                                            <button type="button" class="dropdown-button">Select Filter</button>
                                            <input type="hidden" id="filterInput" name="filter" value="">
                                            <div class="dropdown-content">
                                                <div class="dropdown-item" data-value="recent">Recent</div>
                                                <div class="dropdown-item" data-value="new_added">New added</div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-product-wrap">
                    <div class="row">
                        @forelse($products as $product)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="tp-product-item p-relative">
                                <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="{{ route('serviceSingle', $product->id) }}">
                                        @if(count($product->images_array) > 0)
                                        @foreach(array_slice($product->images_array, 0, 2) as $image)
                                        <img class="image-{{ $loop->index + 1 }}" src="{{ asset('storage/' . $image) }}" alt="Product Image">
                                        @endforeach
                                        @else
                                        <p>No images available.</p>
                                        @endif
                                    </a>
                                </div>
                                <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title">
                                        <a href="{{ route('serviceSingle', $product->id) }}" class="text-anim">
                                            {!! $product->getTranslatedAttribute('name', app()->getLocale()) !!}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>No products found.</p>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination mt-20">
                                <nav>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="{{ route('catalog') }}">
                                                <i class="fa-solid fa-angles-left"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar__wrapper sidebar__style-2">
                    <div class="sidebar__widget mb-35">
                        <h3 class="sidebar__widget-title mb-15">Search Here</h3>
                        <div class="sidebar__widget-content py-3">
                            <div class="sidebar__search">
                                <form action="{{ route('service') }}" method="GET">
                                    <div class="sidebar__search-input-2">
                                        <input type="text" name="query" value="{{ request('query') }}" placeholder="Search here....">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-45">
                        <h3 class="sidebar__widget-title mb-30">Categories</h3>
                        <div class="sidebar__widget-content">
                            <ul>
                                @foreach($categories as $category)
                                <li><a href="/service/{{$category->id}}">{{ $category->name }} ({{ $category->products_count }})</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title mb-20">Door Size</h3>
                        <div class="sidebar__widget-content content-style-2">
                            <ul>
                                @foreach($sizes as $item)
                                <li>
                                    <a href="/service?size={{ $item->id }}">
                                        <i class="fa-solid fa-chevron-left"></i>
                                        {{ $item->size }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Element Selection Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownButton = document.querySelector('.dropdown-button');
        const dropdownContent = document.querySelector('.dropdown-content');
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        const filterInput = document.getElementById('filterInput');
        const filterForm = document.getElementById('filterForm');

        // Show or hide the dropdown when the button is clicked
        dropdownButton.addEventListener('click', function() {
            dropdownContent.classList.toggle('show');
        });

        // Select an option and update the hidden input
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                // Remove 'active' class from all items
                dropdownItems.forEach(i => i.classList.remove('active'));

                // Add 'active' class to the selected item
                this.classList.add('active');

                // Update the button text
                dropdownButton.textContent = this.textContent;

                // Get the selected value and set it in the hidden input
                const selectedValue = this.getAttribute('data-value');
                filterInput.value = selectedValue;

                // Submit the form
                filterForm.submit();

                // Close the dropdown
                dropdownContent.classList.remove('show');
            });
        });

        // Close the dropdown when clicking outside
        window.addEventListener('click', function(e) {
            if (!dropdownButton.contains(e.target) && !dropdownContent.contains(e.target)) {
                dropdownContent.classList.remove('show');
            }
        });
    });
</script>

<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-button {
        background-color: #f0f0f0;
        color: #333;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content .dropdown-item {
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        cursor: pointer;
    }

    .dropdown-content .dropdown-item:hover {
        background-color: #ddd;
    }

    .dropdown-content .active {
        background-color: #007BFF;
        color: #ffffff;
    }

    .show {
        display: block;
    }
</style>
@endsection