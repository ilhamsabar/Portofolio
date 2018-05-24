/* ------------------------------------------------------------------------------
 *
 *  # C3.js - chart axis
 *
 *  Demo setup of chart axis with options
 *
 *  Version: 1.0
 *  Latest update: August 1, 2015
 *
 * ---------------------------------------------------------------------------- */

$(function () {
    

    // Categorized axis
    // ------------------------------

    // Generate chart
    var axis_categorized = c3.generate({
        bindto: '#c3-axis-categorized',
        size: { height: 380 },
        data: {
            columns: [
                ['Diagram Penjualan', 10, 40, 70, 90, 120, 150, 170, 190, 220, 100, 120, 400]
            ]
        },
        color: {
            pattern: ['#039BE5']
        },
        axis: {
            x: {
                type: 'category',
                categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
            }
        },
        grid: {
            y: {
                show: true
            },
            x: {
                show: false
            }
        }
    });



    // Additional axis
    // ------------------------------

    // Generate chart
    var axis_additional = c3.generate({
        bindto: '#c3-axis-additional',
        size: { height: 400 },
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 50, 20, 10, 40, 15, 25]
            ],
            axes: {
                data1: 'y',
                data2: 'y2'
            }
        },
        color: {
            pattern: ['#4CAF50', '#607D8B']
        },
        axis: {
            y2: {
                show: true
            }
        },
        grid: {
            y: {
                show: true
            }
        }
    });



    // Axis tick culling
    // ------------------------------

    // Generate chart
    var axis_tick_culling = c3.generate({
        bindto: '#c3-axis-tick-culling',
        size: { height: 400 },
        data: {
            columns: [
                ['sample', 30, 200, 100, 400, 150, 250, 30, 200, 100, 400, 150, 250, 30, 200, 100, 400, 150, 250, 200, 100, 400, 150, 250]
            ]
        },
        color: {
            pattern: ['#FF5722']
        },
        axis: {
            x: {
                type: 'category',
                tick: {
                    culling: {
                        max: 4
                    }
                }
            }
        }
    });



    // Text label rotation
    // ------------------------------

    // Generate chart
    var axis_tick_rotation = c3.generate({
        bindto: '#c3-axis-tick-rotation',
        size: { height: 400 },
        data: {
            x : 'x',
            columns: [
                ['x', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                ['Jumlah Penjualan Perbulan', 10, 10, 10, 10, 10, 100, 10, 10, 10, 10, 10, 10],
            ],
            type: 'bar'
        },
        color: {
            pattern: ['#00BCD4']
        },
        axis: {
            x: {
                type: 'category',
                tick: {
                    rotate: -90
                },
                height: 80
            }
        },
        grid: {
            x: {
                show: true
            }
        }
    });



    // Axis labels
    // ------------------------------

    // Generate chart
    var axis_labels = c3.generate({
        bindto: '#c3-axis-labels',
        size: { height: 400 },
        data: {
            columns: [
                ['sample', 30, 200, 100, 400, 150, 250],
                ['sample2', 130, 300, 200, 500, 250, 350]
            ],
            axes: {
                sample2: 'y2'
            }
        },
        color: {
            pattern: ['#9C27B0']
        },
        axis: {
            x: {
                label: 'X Label'
            },
            y: {
                label: 'Y Label'
            },
            y2: {
                show: true,
                label: 'Y2 Label'
            }
        }
    });



    // Resize chart on sidebar width change
    $(".sidebar-control").on('click', function() {
        axis_categorized.resize();
        axis_additional.resize();
        axis_tick_culling.resize();
        axis_tick_rotation.resize();
        axis_labels.resize();
    });
});