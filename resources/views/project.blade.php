@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container-fluid text-white text-center py-5" style="background-color: #34BCF2">
    <h1 class="fw-bold">KG OF TRASH REMOVED</h1>
    <div class="progress mx-auto my-4 position-relative" style="height: 30px; width: 80%; max-width: 800px;">
        <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
            10.23 Kg
        </div>
        <span class="position-absolute end-0 text-dark me-2" style="top: 50%; transform: translateY(-50%);">
            100,000 Kg
        </span>
    </div>
</div>

<div class="container my-5">
    <h2 class="fw-bold mb-4">Upcoming Projects</h2>
    <div class="row align-items-center">
        <div class="col-1 text-center">
            <button class="btn btn-secondary" id="prevButton">&lt;</button>
        </div>
        <div class="col-10">
            <div class="d-flex justify-content-center" id="projectContainer">

            </div>
        </div>
        <div class="col-1 text-center">
            <button class="btn btn-secondary" id="nextButton">&gt;</button>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-body d-flex align-items-center" style="color: black">
                    <div class="me-3">
                        <img src="/images/image_6.jpg" alt="Donor" class="rounded-circle" style="width: 50px; height: 50px;">
                    </div>
                    <div>
                        <h5 class="mb-0">Budi Santoso</h5>
                        <p class="text-muted">Description Message</p>
                    </div>
                    <div class="ms-auto">
                        <span class="badge bg-success p-3">Rp. 20.000.000</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-body d-flex align-items-center" style="color: black">
                    <div class="me-3">
                        <img src="/images/image_7.jpg" alt="Volunteer" class="rounded-circle" style="width: 50px; height: 50px;">
                    </div>
                    <div>
                        <h5 class="mb-0">Rizky Fadillah</h5>
                        <p class="text-muted">Description Message</p>
                    </div>
                    <div class="ms-auto">
                        <span class="badge bg-primary p-3">15 Activity</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const projects = [
        { image: '/images/image_6.jpg', text: 'Text 1' },
        { image: '/images/image_7.jpg', text: 'Text 2' },
        { image: '/images/image_6.jpg', text: 'Text 3' },
        { image: '/images/image_7.jpg', text: 'Text 4' },
    ];

    let highlightedIndex = 0;

    const renderProjects = () => {
        const projectContainer = document.getElementById('projectContainer');
        projectContainer.innerHTML = '';

        projects.forEach((project, index) => {
            const card = document.createElement('div');
            card.className = 'card mx-3 project-card';
            card.style.width = '150px';
            card.style.opacity = index === highlightedIndex ? '1' : '0.5';
            if (index === highlightedIndex) {
                card.classList.add('highlighted');
            }

            card.innerHTML = `
                <img src="${project.image}" class="card-img-top" alt="${project.text}">
                <div class="card-body text-center">
                    <p class="card-text" style="color: black">${project.text}</p>
                </div>
            `;

            projectContainer.appendChild(card);
        });
    };

    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');

    prevButton.addEventListener('click', () => {
        if (highlightedIndex > 0) {
            highlightedIndex--;
        } else {
            highlightedIndex = projects.length - 1;
        }
        renderProjects();
    });

    nextButton.addEventListener('click', () => {
        if (highlightedIndex < projects.length - 1) {
            highlightedIndex++;
        } else {
            highlightedIndex = 0;
        }
        renderProjects();
    });

    renderProjects();
</script>

<style>
    #projectContainer {
        display: flex;
        justify-content: center;
        gap: 15px;
        padding: 10px;
    }

    .project-card {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .project-card.highlighted {
        transform: scale(1.1);
    }

    .project-card:hover {
        transform: scale(1.1);
    }
</style>
@endsection
