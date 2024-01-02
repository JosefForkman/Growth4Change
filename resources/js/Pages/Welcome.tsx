import { PageProps } from '@/types';
import Layout from '@/Layouts/Layout';
import { Head } from '@inertiajs/react';

type pageData = {

}

export default function Welcome({ auth, pageData }: PageProps<{ pageData: pageData }>) {
    return (
        <Layout user={auth.user}>
            <Head title="Home" />
            <div className="flex flex-col items-center justify-center min-h-screen text-center">
                <h1 className="text-6xl font-bold">
                    Welcome
                </h1>
            </div>
        </Layout>
    );
}
