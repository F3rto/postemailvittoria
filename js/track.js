async function track() {
    const url = 'https://trackingpackage.p.rapidapi.com/TrackingPackage?trackingNumber=3C8648I036241';
const options = {
	method: 'GET',
	headers: {
		Authorization: 'Basic Ym9sZGNoYXQ6TGZYfm0zY2d1QzkuKz9SLw==',
		'X-RapidAPI-Key': 'cd0f0f266emsh2c7e64497e151bdp108e8bjsn3faf524512d3',
		'X-RapidAPI-Host': 'trackingpackage.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
} catch (error) {
	console.error(error);
}
}