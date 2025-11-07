

<?php $__env->startSection('content'); ?>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-4">Anti-Tick Vaccine</h1>
    <p>Welcome to the Anti tick.</p>
  </div>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
      .nav-button {
          display: flex;
          justify-content: space-between;
          align-items: center;
          width: 100%;
          padding: 20px 25px;
          margin-bottom: 15px;
          background-color: #007bff;
          color: white;
          border: none;
          border-radius: 0;
          text-align: left;
          text-decoration: none;
          font-size: 18px;
          font-weight: 500;
          transition: background-color 0.3s;
      }
      .nav-button:hover {
          background-color: #0056b3;
          color: white;
          text-decoration: none;
      }
      .nav-button .arrow {
          font-size: 24px;
          font-weight: bold;
      }
      .button-container {
          display: flex;
          flex-direction: column;
          gap: 0;
      }
      .image-container img {
          width: 100%;
          height: auto;
          border-radius: 10px;
          object-fit: cover;
      }
  </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Anti-Tick Vaccine</h1>
        <div class="row">
            <!-- Left Column: Image -->
            <div class="col-md-6 mb-4">
                <div class="image-container">
                    <!-- <img src="https://via.placeholder.com/600x400?text=Anti-Tick+Vaccine+Image" alt="Anti-Tick Vaccine" class="img-fluid"> -->
                    <img
                src="<?php echo e(asset('images/narovac1.png')); ?>"
                alt="NARO Anti-tick vaccine"
                class="block w-full h-56 sm:h-72 md:h-[420px] object-cover"
                loading="lazy"
            >
                </div>
            </div>
            <!-- Right Column: Navigation Buttons -->
            <div class="col-md-6 mb-4">
                <div class="button-container">
                    <a href="<?php echo e(route('anti-tick-vaccine.vets')); ?>" class="nav-button">
                        <span>Vets</span>
                        <span class="arrow">→</span>
                    </a>
                    <a href="<?php echo e(route('anti-tick-vaccine.farmers')); ?>" class="nav-button">
                        <span>Farmers</span>
                        <span class="arrow">→</span>
                    </a>
                    <a href="<?php echo e(route('anti-tick-vaccine.publications')); ?>" class="nav-button">
                        <span>Publications</span>
                        <span class="arrow">→</span>
                    </a>
                    <a href="<?php echo e(route('anti-tick-vaccine.faqs')); ?>" class="nav-button">
                        <span>FAQs</span>
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\resources\views/sections/facilities/anti_tick_vaccine.blade.php ENDPATH**/ ?>