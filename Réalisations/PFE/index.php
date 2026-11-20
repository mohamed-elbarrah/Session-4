<?php

$student = [
    'name' => 'Mohamed ElBarrah',
    'student_id' => 'ST-2048',
    'department' => 'Web Development',
    'academic_year' => '2026–2027',
];

$attendanceScore = [
    'percentage' => 96.5,
    'label' => 'Attendance rate',
    'status' => 'Good standing',
];

$currentSession = [
    'title' => 'Front-end Development',
    'class' => 'Class A',
    'room' => 'Room 204',
    'instructor' => 'Amine Amine',
    'start' => '09:00',
    'end' => '11:15',
    'remaining' => '01h 24m',
];


$calendarDays = [
    '2026-10-26' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-10-27' => [
        'sessions' => ['present', 'late', 'present'],
        'status' => 'mixed',
    ],
    '2026-10-28' => [
        'sessions' => ['present', 'present', 'absent'],
        'status' => 'absence',
    ],
    '2026-10-29' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-10-30' => [
        'sessions' => ['late', 'present', 'present'],
        'status' => 'mixed',
    ],
    '2026-10-31' => [
        'sessions' => [],
        'status' => 'present',
    ],
    '2026-11-01' => [
        'sessions' => ['present', 'absent', 'present'],
        'status' => 'absence',
    ],
    '2026-11-02' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-03' => [
        'sessions' => ['present', 'late', 'present'],
        'status' => 'mixed',
    ],
    '2026-11-04' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-05' => [
        'sessions' => ['absent', 'present', 'present'],
        'status' => 'absence',
    ],
    '2026-11-06' => [
        'sessions' => ['present', 'present', 'late'],
        'status' => 'mixed',
    ],
    '2026-11-07' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-08' => [
        'sessions' => ['present', 'late', 'present'],
        'status' => 'mixed',
    ],
    '2026-11-09' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-10' => [
        'sessions' => ['present', 'present', 'absent'],
        'status' => 'absence',
    ],
    '2026-11-11' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-12' => [
        'sessions' => ['late', 'present', 'present'],
        'status' => 'mixed',
    ],
    '2026-11-13' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-14' => [
        'sessions' => ['present', 'absent', 'present'],
        'status' => 'absence',
    ],
    '2026-11-15' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-16' => [
        'sessions' => ['present', 'late', 'present'],
        'status' => 'mixed',
    ],
    '2026-11-17' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-18' => [
        'sessions' => ['present', 'late', 'present'],
        'status' => 'mixed',
    ],
    '2026-11-19' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-20' => [
        'sessions' => ['present', 'present', 'late'],
        'status' => 'mixed',
    ],
    '2026-11-21' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-22' => [
        'sessions' => ['absent', 'present', 'present'],
        'status' => 'absence',
    ],
    '2026-11-23' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-24' => [
        'sessions' => ['present', 'late', 'present'],
        'status' => 'mixed',
    ],
    '2026-11-25' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-26' => [
        'sessions' => ['present', 'absent', 'present'],
        'status' => 'absence',
    ],
    '2026-11-27' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-28' => [
        'sessions' => ['late', 'present', 'present'],
        'status' => 'mixed',
    ],
    '2026-11-29' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-11-30' => [
        'sessions' => ['present', 'late', 'present'],
        'status' => 'mixed',
    ],
    '2026-12-01' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-12-02' => [
        'sessions' => ['present', 'absent', 'present'],
        'status' => 'absence',
    ],
    '2026-12-03' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-12-04' => [
        'sessions' => ['late', 'present', 'present'],
        'status' => 'mixed',
    ],
    '2026-12-05' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
    '2026-12-06' => [
        'sessions' => ['present', 'present', 'present'],
        'status' => 'present',
    ],
];

$attendanceHistory = [
    [
        'date' => 'Wednesday, Nov 17',
        'label' => 'Today',
        'sessions' => [
            ['name' => 'Session 1', 'duration' => '09:00–11:15', 'status' => 'present', 'action' => 'View details'],
            ['name' => 'Session 2', 'duration' => '11:30–13:50', 'status' => 'late', 'action' => 'View details'],
            ['name' => 'Session 3', 'duration' => '14:50–17:00', 'status' => 'upcoming', 'action' => '—'],
        ],
    ],
    [
        'date' => 'Tuesday, Nov 16',
        'label' => '',
        'sessions' => [
            ['name' => 'Session 1', 'duration' => '09:00–11:15', 'status' => 'present', 'action' => 'View details'],
            ['name' => 'Session 2', 'duration' => '11:30–13:50', 'status' => 'present', 'action' => 'View details'],
            ['name' => 'Session 3', 'duration' => '14:50–17:00', 'status' => 'present', 'action' => 'View details'],
        ],
    ],
    [
        'date' => 'Monday, Nov 15',
        'label' => '',
        'sessions' => [
            ['name' => 'Session 1', 'duration' => '09:00–11:15', 'status' => 'present', 'action' => 'View details'],
            ['name' => 'Session 2', 'duration' => '11:30–13:50', 'status' => 'absent', 'action' => 'Add justification'],
            ['name' => 'Session 3', 'duration' => '14:50–17:00', 'status' => 'present', 'action' => 'View details'],
        ],
    ],
];

require('student-page.php');
?>
