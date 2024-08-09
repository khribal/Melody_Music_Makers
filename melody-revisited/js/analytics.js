function createBarChart(containerId, data) {
    const container = d3.select(containerId);
    const margin = { top: 20, right: 30, bottom: 40, left: 40 };

    function updateChart() {
        const containerWidth = container.node().getBoundingClientRect().width;
        const containerHeight = 300; // Fixed height for simplicity

        const width = containerWidth - margin.left - margin.right;
        const height = containerHeight - margin.top - margin.bottom;

        // Remove existing SVG if present
        container.selectAll("svg").remove();

        // Create SVG element with viewBox for responsiveness
        const svg = container.append("svg")
            .attr("width", containerWidth)
            .attr("height", containerHeight)
            .attr("viewBox", `0 0 ${containerWidth} ${containerHeight}`)
            .attr("preserveAspectRatio", "xMidYMid meet");

        const x = d3.scaleBand()
            .domain(data.map(d => d.instrument))
            .range([0, width])
            .padding(0.1);

        const y = d3.scaleLinear()
            .domain([0, d3.max(data, d => d.count)])
            .nice()
            .range([height, 0]);

        const g = svg.append("g")
            .attr("transform", `translate(${margin.left},${margin.top})`);

        g.append("g")
            .attr("class", "x-axis")
            .attr("transform", `translate(0,${height})`)
            .call(d3.axisBottom(x));

        g.append("g")
            .attr("class", "y-axis")
            .call(d3.axisLeft(y)
                .ticks(d3.max(data, d => d.count))  // Ensure sufficient ticks
                .tickFormat(d3.format("d"))  // Ensure integer formatting
            );
        g.selectAll(".bar")
            .data(data)
            .enter().append("rect")
            .attr("class", "bar")
            .attr("x", d => x(d.instrument))
            .attr("y", d => y(d.count))
            .attr("width", x.bandwidth())
            .attr("height", d => height - y(d.count))
            .attr("fill", "#67ae47");
    }

    // Initial chart creation
    updateChart();

    // Attach resize event listener
    window.addEventListener("resize", updateChart);
}

const convertedData = instrumentData.map(d => ({
    instrument: d.Instrument,
    count: parseInt(d.Rented, 10)  // Convert the "Rented" value to an integer
}));

const convertedData2 = studentData.map(d => ({
    instrument: d.lesson_month,
    count: parseInt(d.num_students, 10)  // Convert the "Rented" value to an integer
}));

// Create bar charts
createBarChart("#instrument-graph1", convertedData);
createBarChart("#instrument-graph2", convertedData2);
