<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student attendance | Attendly</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="css/component.css">
</head>

<body>
  <div class="app-shell">
    <aside class="sidebar">
      <a class="brand" href="#home"><span>Attend</span><b>ly</b></a>
      <p class="nav-label">MY SPACE</p>
      <nav>
        <a class="nav-item active" href="#">◷ <span>My attendance</span></a>
        <a class="nav-item" href="#">▤ <span>Justifications</span></a>
        <a class="nav-item" href="#">♙ <span>My profile</span></a>
      </nav>
      <div class="sidebar-bottom"><span class="help-icon">?</span>
        <div><strong>Need help?</strong><small>Visit the help center</small></div>
      </div>
    </aside>

    <main class="main-area">
      <header class="topbar">
        <div class="breadcrumbs">Dashboard <span>/</span> <strong>My attendance</strong></div>
        <div class="top-actions"><span class="admin-avatar">LB</span>
          <div><strong>Lina Benali</strong><small>Student account</small></div>
        </div>
      </header>

      <div class="page-content">
        <div class="page-heading">
          <div>
            <p class="eyebrow">MY ATTENDANCE</p>
            <h1>Attendance overview</h1>
            <p class="subtitle">Track your attendance, sessions, and absence requests.</p>
          </div>
        </div>

        <section class="profile-card">
          <!-- student infos -->
          <div class="student-panel">
            <div>
              <div class="avtar">
                <div class="student-avatar">LB</div>
                <div class="student-info">
                  <h2><?= $student['name']; ?></h2>
                  <p>Student ID <strong><?= $student['student_id']; ?></strong></p>
                </div>
              </div>
              <div class="student-meta">
                <div><span>DEPARTMENT</span><strong><?= $student['department']; ?></strong></div>
                <div><span>ACADEMIC YEAR</span><strong><?= $student['academic_year']; ?></strong></div>
              </div>
            </div>
          </div>

          <!-- score rate -->
          <div class="score-panel">
            <div class="section-caption">ATTENDANCE SCORE </div>
            <div class="score-line"><strong><?= $attendanceScore['percentage']; ?><span>%</span></strong></div>
            <div class="progress-track"><span></span></div>
            <div class="score-foot"><span><?= $attendanceScore['label']; ?></span><strong><?= $attendanceScore['status']; ?></strong></div>
          </div>
        </section>

        <section class="detail-card">
          <div class="tabs" role="tablist">
            <a class="tab selected" href="#overview">Overview</a><a class="tab" href="#justifications">Justifications
              <span class="tab-count">2</span></a><a class="tab" href="#history">History</a><a class="tab"
              href="#requests">Requests</a>
          </div>

          <!-- overview content -->
          <div id="overview" class="overview-content">
            <section class="current-session">

              <div class="current-copy"><span class="live-label"><i></i> IN PROGRESS</span>
                <h2><?= $currentSession['title']; ?></h2>
                <p><?= $currentSession['class']; ?> · <?= $currentSession['room']; ?> · Instructor: <?= $currentSession['instructor']; ?></p>
              </div>
              <div class="session-time"><span>SESSION TIME</span><strong><?= $currentSession['start']; ?><em>—</em><?= $currentSession['end']; ?></strong></div>
              <div class="time-left"><span>TIME REMAINING</span><?= $currentSession['remaining']; ?></div>
            </section>

            <section class="calendar-section">
              <div class="section-heading">
                <div>
                  <h2>Attendance calendar</h2>
                  <p>Daily overview of scheduled sessions and attendance.</p>
                </div>
                <div class="month-picker"><button>‹</button><strong>November
                    2026</strong><button>›</button></div>
              </div>


              <div class="calendar-days">

                <!-- table columns -->
                <span class="weekday">MON</span>
                <span class="weekday">TUE</span>
                <span class="weekday">WED</span>
                <span class="weekday">THU</span>
                <span class="weekday">FRI</span>
                <span class="weekday">SAT</span>
                <span class="weekday">SUN</span>


              <?php foreach($calendarDays as $date => $day): ?>
                <?php
                  // set global day status
                  $dayClass = [
                      'present' => 'global-present',
                      'mixed' => 'global-mixed',
                      'absence' => 'global-absence',
                  ];
                  // format date to extract day date without month and year
                  $dayNumber = date('d/m/Y', strtotime($date));
                  // global day status
                  $class = $dayClass[$day['status']];
                  ?>

                  <div class="day <?= $class ?>">
                      <span class="day-number"><?= $dayNumber ?></span>

                      <span class="session-marks">
                          <?php foreach ($day['sessions'] as $session): ?>
                              <i class="<?= $session ?>"></i>
                          <?php endforeach; ?>
                      </span>
                  </div>
              <?php endforeach;?>
            </section>

            <section class="history-section" id="history">
              <div class="section-heading history-heading">
                <div>
                  <h2>Attendance history</h2>
                  <p>Session-by-session attendance record.</p>
                </div><button class="filter-button">All statuses</button>
              </div>
              <div class="table-wrap">
                <table class="session-history">
                  <thead>
                    <tr>
                      <th>DATE</th>
                      <th>SESSION</th>
                      <th>DURATION</th>
                      <th>STATUS</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($attendanceHistory as $day): ?>

                          <?php foreach ($day['sessions'] as $index => $session): ?>

                              <tr>
                                  <?php if ($index === 0): ?>
                                      <td
                                          rowspan="<?= count($day['sessions']) ?>"
                                          class="date-cell"
                                      >
                                          <strong><?= $day['date'] ?></strong>

                                          <?php if (!empty($day['label'])): ?>
                                              <small><?= $day['label'] ?></small>
                                          <?php endif; ?>
                                      </td>
                                  <?php endif; ?>

                                  <td><?= $session['name'] ?></td>

                                  <td><?= $session['duration'] ?></td>

                                  <td>
                                      <span class="attendance-status <?= $session['status'] ?>">
                                          <i></i>
                                          <?= ucfirst($session['status']) ?>
                                      </span>
                                  </td>

                                  <td>
                                      <?php if ($session['action'] === '—'): ?>
                                          —
                                      <?php else: ?>
                                          <a class="action-link" href="#">
                                              <?= $session['action'] ?>
                                          </a>
                                      <?php endif; ?>
                                  </td>
                              </tr>

                          <?php endforeach; ?>

                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <div class="table-footer">Showing 3 of 24 attendance days <a href="#">View full history →</a></div>
            </section>
          </div>
          <div class="placeholder-panels">
            <section id="justifications">
              <h2>Justifications</h2>
              <p>Review submitted absence justifications.</p>
            </section>
            <section id="requests">
              <h2>Attendance requests</h2>
              <p>Manage requests for absence or lateness authorization.</p>
            </section>
          </div>
        </section>
        <footer>© 2026 Attendly <span>Attendance management system.</span></footer>
      </div>
    </main>
  </div>
</body>

</html>