document.addEventListener("DOMContentLoaded", function () {
    // Rental Trends Data
    const rentalData = [
        { month: 'January', rentals: 20 },
        { month: 'February', rentals: 15 },
        { month: 'March', rentals: 25 },
        { month: 'April', rentals: 30 },
        { month: 'May', rentals: 10 },
        { month: 'June', rentals: 5 },
        { month: 'July', rentals: 40 },
        { month: 'August', rentals: 35 },
        { month: 'September', rentals: 45 },
        { month: 'October', rentals: 50 },
        { month: 'November', rentals: 30 },
        { month: 'December', rentals: 20 }
    ];

    // Instrument Availability Data
    const availabilityData = [
        { instrument: 'Guitar', count: 30 },
        { instrument: 'Piano', count: 15 },
        { instrument: 'Violin', count: 10 },
        { instrument: 'Drums', count: 5 }
    ];

    // Rental Trends Chart
    const rentalMargin = { top: 20, right: 20, bottom: 30, left: 50 },
        rentalWidth = 600 - rentalMargin.left - rentalMargin.right,
        rentalHeight = 400 - rentalMargin.top - rentalMargin.bottom;

    const rentalSvg = d3.select("#rentalTrendsChart")
        .append("svg")
        .attr("width", rentalWidth + rentalMargin.left + rentalMargin.right)
        .attr("height", rentalHeight + rentalMargin.top + rentalMargin.bottom)
        .append("g")
        .attr("transform", "translate(" + rentalMargin.left + "," + rentalMargin.top + ")");

    const rentalX = d3.scaleBand()
        .range([0, rentalWidth])
        .padding(0.1)
        .domain(rentalData.map(d => d.month));

    const rentalY = d3.scaleLinear()
        .range([rentalHeight, 0])
        .domain([0, d3.max(rentalData, d => d.rentals)]);

    rentalSvg.append("g")
        .attr("class", "x axis")
        .attr("transform", "translate(0," + rentalHeight + ")")
        .call(d3.axisBottom(rentalX));

    rentalSvg.append("g")
        .attr("class", "y axis")
        .call(d3.axisLeft(rentalY));

    rentalSvg.selectAll(".bar")
        .data(rentalData)
        .enter().append("rect")
        .attr("class", "bar")
        .attr("x", d => rentalX(d.month))
        .attr("width", rentalX.bandwidth())
        .attr("y", d => rentalY(d.rentals))
        .attr("height", d => rentalHeight - rentalY(d.rentals));

    // Instrument Availability Chart
    const availabilityMargin = { top: 20, right: 20, bottom: 30, left: 50 },
        availabilityWidth = 600 - availabilityMargin.left - availabilityMargin.right,
        availabilityHeight = 400 - availabilityMargin.top - availabilityMargin.bottom;

    const availabilitySvg = d3.select("#availabilityChart")
        .append("svg")
        .attr("width", availabilityWidth + availabilityMargin.left + availabilityMargin.right)
        .attr("height", availabilityHeight + availabilityMargin.top + availabilityMargin.bottom)
        .append("g")
        .attr("transform", "translate(" + availabilityMargin.left + "," + availabilityMargin.top + ")");

    const availabilityX = d3.scaleBand()
        .range([0, availabilityWidth])
        .padding(0.1)
        .domain(availabilityData.map(d => d.instrument));

    const availabilityY = d3.scaleLinear()
        .range([availabilityHeight, 0])
        .domain([0, d3.max(availabilityData, d => d.count)]);

    availabilitySvg.append("g")
        .attr("class", "x axis")
        .attr("transform", "translate(0," + availabilityHeight + ")")
        .call(d3.axisBottom(availabilityX));

    availabilitySvg.append("g")
        .attr("class", "y axis")
        .call(d3.axisLeft(availabilityY));

    availabilitySvg.selectAll(".bar")
        .data(availabilityData)
        .enter().append("rect")
        .attr("class", "bar")
        .attr("x", d => availabilityX(d.instrument))
        .attr("width", availabilityX.bandwidth())
        .attr("y", d => availabilityY(d.count))
        .attr("height", d => availabilityHeight - availabilityY(d.count));
});
