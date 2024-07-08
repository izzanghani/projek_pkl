$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            Baju: 2666,
            Celana: null,
            Sepatu: 2647
        }, {
            period: '2010 Q2',
            Baju: 2778,
            Celana: 2294,
            Sepatu: 2441
        }, {
            period: '2010 Q3',
            Baju: 4912,
            Celana: 1969,
            Sepatu: 2501
        }, {
            period: '2010 Q4',
            Baju: 3767,
            Celana: 3597,
            Sepatu: 5689
        }, {
            period: '2011 Q1',
            Baju: 6810,
            Celana: 1914,
            Sepatu: 2293
        }, {
            period: '2011 Q2',
            Baju: 5670,
            Celana: 4293,
            Sepatu: 1881
        }, {
            period: '2011 Q3',
            Baju: 4820,
            Celana: 3795,
            Sepatu: 1588
        }, {
            period: '2011 Q4',
            Baju: 15073,
            Celana: 5967,
            Sepatu: 5175
        }, {
            period: '2012 Q1',
            Baju: 10687,
            Celana: 4460,
            Sepatu: 2028
        }, {
            period: '2012 Q2',
            Baju: 8432,
            Celana: 5713,
            Sepatu: 1791
        }],
        xkey: 'period',
        ykeys: ['Baju', 'Celana', 'Sepatu'],
        labels: ['Baju', 'Celana', 'Sepatu'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
