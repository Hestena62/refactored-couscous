<?php
/**
 * Hesten's Learning - Level K (Grade 9)
 * Using the master level template for consistency.
 */

// Page-Specific Metadata
$pageTitle       = "Grade 9 Level K | Hesten's Learning";
$pageDescription = "Algebra I foundations: mastering relationships between quantities, equations, and graphs.";
$pageKeywords    = "Grade 9, Freshman, Algebra 1, Functions, Polynomials, Equations, Statistics";

// Template Variables
$themeColor = 'rose';
$levelId = 'k';
$levelTitle = 'Level K';
$gradeText = 'High School';
$initialSubject = 'math';
$initialSubjectName = 'Math';
$initialSubjectDesc = 'Algebra I foundations: mastering relationships between quantities, equations, and graphs.';

// Curriculum Data
$modules = [
    [
        'title' => 'Relationships Between Quantities',
        'description' => 'Reasoning with equations and their graphs.',
        'topics' => [
            [
                'letter' => 'A',
                'name' => 'Introduction to Functions',
                'skills' => [
                    ['id' => 'k-math-m1-a-1', 'code' => 'K.M1.A.1', 'name' => 'Graphing stories and elevation vs time'],
                    ['id' => 'k-math-m1-a-2', 'code' => 'K.M1.A.2', 'name' => 'Growth of square areas and functions']
                ]
            ],
            [
                'letter' => 'B',
                'name' => 'Structure of Expressions',
                'skills' => [
                    ['id' => 'k-math-m1-b-1', 'code' => 'K.M1.B.1', 'name' => 'Commutative and associative properties']
                ]
            ]
        ]
    ]
];

// Load the Master Template
include '../src/level_template.php';
?>