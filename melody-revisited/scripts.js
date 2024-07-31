document.addEventListener("DOMContentLoaded", function () {
    // Toggle Light/Dark Mode
    const toggleModeBtn = document.getElementById("toggleMode");
    toggleModeBtn.addEventListener("click", function () {
        document.body.classList.toggle("light-mode");
    });

    // D3.js Sales Graph
    const salesData = [
        { month: 'January', sales: 20 },
        { month: 'February', sales: 25 },
        { month: 'March', sales: 30 },
        { month: 'April', sales: 40 },
        { month: 'May', sales: 50 },
        { month: 'June', sales: 60 },
        { month: 'July', sales: 70 },
        { month: 'August', sales: 80 },
        { month: 'September', sales: 90 },
        { month: 'October', sales: 100 },
        { month: 'November', sales: 110 },
        { month: 'December', sales: 120 }
    ];

    const margin = { top: 20, right: 30, bottom: 40, left: 50 },
        width = 800 - margin.left - margin.right,
        height = 400 - margin.top - margin.bottom;

    const svg = d3.select("#salesGraph")
        .append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
        .append("g")
        .attr("transform", `translate(${margin.left},${margin.top})`);

    const x = d3.scaleBand()
        .domain(salesData.map(d => d.month))
        .range([0, width])
        .padding(0.1);

    const y = d3.scaleLinear()
        .domain([0, d3.max(salesData, d => d.sales)])
        .nice()
        .range([height, 0]);

    svg.append("g")
        .attr("class", "x axis")
        .attr("transform", `translate(0,${height})`)
        .call(d3.axisBottom(x));

    svg.append("g")
        .attr("class", "y axis")
        .call(d3.axisLeft(y));

    svg.selectAll(".bar")
        .data(salesData)
        .enter().append("rect")
        .attr("class", "bar")
        .attr("x", d => x(d.month))
        .attr("y", d => y(d.sales))
        .attr("width", x.bandwidth())
        .attr("height", d => height - y(d.sales))
        .attr("fill", "#4CAF50");
});
