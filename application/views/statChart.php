    <div style="width: 600px;">
    <h1><?php echo $titre; ?></h1>
        <canvas id="ctx"></canvas>
    </div>
    <script>
        const ctx = document.getElementById('ctx');
      
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: [
                0,1,2,3
            ],
            datasets: [{
              label: '# of Votes',
              data: [
                0,1,2,3
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
      <script src=<?php echo base_url('assets/chart.js');?>></script>